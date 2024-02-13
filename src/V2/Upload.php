<?php
/**
 * Файл с классом-сервисом для
 * работы с загрузкой контента
 *
 * PHP version 8
 *
 * @category V2
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */

namespace Whatis\WBAPI\V2;

use Whatis\WBAPI\Service\BaseService;
use Whatis\WBAPI\Traits\ContentV2Category;
use Whatis\WBAPI\Attribute\Mapping;
use RuntimeException;

/**
 * Класс-сервис для работы
 * с загрузкой контента
 *
 * PHP version 8
 *
 * @category V2
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class Upload extends BaseService
{
    use ContentV2Category;

    /**
     * Обновить карточку товара
     *
     * Редактирование КТ происходит асинхронно, после
     * отправки запрос становится в очередь на обработку.
     *
     * Важно*: Баркоды (skus) не подлежат удалению или замене.
     * Попытка заменить существующий баркод приведет
     * к добавлению нового баркода к существующему.
     *
     * Если запрос прошел успешно, а информация в карточке
     * не обновилась, значит были допущены ошибки и карточка
     * попала в "Черновики" (метод cards/error/list)
     * с описанием ошибок.
     *
     * Необходимо исправить ошибки в запросе и
     * отправить его повторно.
     *
     * Для успешного обновления карточки рекомендуем Вам
     * придерживаться следующего порядка действий:
     * 1. Сначала существующую карточку
     * необходимо запросить методом cards/filter.
     * 2. Забираем из ответа массив data.
     * 3. В этом массиве вносим необходимые изменения
     * и отправляем его в cards/update
     *
     * `content/v2/cards/update`
     *
     * @param array $cards Список обновленных карточек товара
     *
     * @return mixed
     */
    #[Mapping('cards/update')]
    public function update(array $cards): mixed
    {
        if (count($cards) > 1000) {
            throw new RuntimeException(
                'Count cards must be less then 1000'
            );
        }

        return $this->request(
            'POST', 'cards/update', $cards
        );
    }

    /**
     * Создать карточку товара
     *
     * Создание карточки товара происходит асинхронно,
     * при отправке запроса на создание КТ ваш запрос
     * становится в очередь на создание КТ.

     * ПРИМЕЧАНИЕ: Карточка товара считается созданной,
     * если успешно создалась хотя бы одна НМ.
     *
     * ВАЖНО: Если во время обработки запроса в очереди
     * выявляются ошибки, то НМ считается ошибочной.

     * Если запрос на создание прошел успешно, а карточка
     * не создалась, то необходимо в первую очередь проверить
     * наличие карточки в методе cards/error/list.
     *
     * Если карточка попала в ответ к этому методу,
     * то необходимо исправить описанные ошибки в запросе
     * на создание карточки и отправить его повторно.
     *
     * За раз можно создать 1000 КТ по 5 НМ в каждой.

     * Если Вам требуется больше 5 НМ в КТ, то
     * после создания карточки Вы можете добавить
     * их методом "Добавление НМ к КТ".
     *
     * `content/v2/cards/upload`
     *
     * @param int   $subjectID Идентификатор предмета
     * @param array $variants  Массив вариантов товара
     *
     * @return mixed
     */
    #[Mapping('cards/upload')]
    public function create(int $subjectID, array $variants): mixed
    {
        if (count($variants) > 1000) {
            throw new RuntimeException(
                'Count cards must be less then 1000'
            );
        }

        return $this->request(
            'POST', 'cards/upload', [
                'subjectID' => $subjectID,
                'variants' => $variants
            ]
        );
    }

    /**
     * Добавление номенклатуры к карточке товара
     *
     * Добавление НМ к КТ происходит асинхронно,
     * после отправки запрос становится в
     * очередь на обработку.
     *
     * Важно: Если после успешной отправки запроса номенклатура
     * не создалась, то необходимо проверить раздел
     * "Список несозданных НМ с ошибками".
     * Для того чтобы убрать НМ из ошибочных,
     * необходимо повторно сделать запрос с
     * исправленными ошибками.
     *
     * `content/v2/cards/upload/add`
     *
     * @param int   $imtID      imtID, к которой добавляется НМ
     * @param array $cardsToAdd Структура добавляемой НМ
     *
     * @return mixed
     */
    #[Mapping('cards/upload/add')]
    public function addNm(int $imtID, array $cardsToAdd): mixed
    {
        return $this->request(
            'POST', 'cards/upload/add', [
                'imtID' => $imtID,
                'cardsToAdd' => $cardsToAdd
            ]
        );
    }

    /**
     * Объединение / Разъединение НМ
     *
     * `content/v2/cards/moveNm`
     *
     * @param int   $targetIMT Существующий у продавца imtID,
     *                         под которым необходимо объединить НМ
     * @param array $nmIDs     НМ которые необходимо объеденить
     *
     * @return mixed
     */
    #[Mapping('cards/moveNm')]
    public function moveNm(int $targetIMT, array $nmIDs): mixed
    {
        return $this->request(
            'POST', 'cards/moveNm', [
                'targetIMT' => $targetIMT,
                'nmIDs' => $nmIDs
            ]
        );
    }

    /**
     * Генерация баркодов
     *
     * `content/v2/barcodes`
     *
     * @param int $count Количество баркодов, которые необходимо
     *                   сгенерировать
     *
     * @return mixed
     */
    #[Mapping('barcodes')]
    public function barcodes(int $count): mixed
    {
        if ($count > 5000) {
            throw new RuntimeException(
                'Count barcodes must be less 5000'
            );
        }

        return $this->request(
            'POST', 'barcodes', [
                'count' => $count
            ]
        );
    }
}
