<?php
/**
 * Файл с классом-сервисом для
 * работы с медиаконтентом
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
use RuntimeException;

/**
 * Класс-сервис для работы
 * с медиаконтентом
 *
 * PHP version 8
 *
 * @category V2
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class Media extends BaseService
{
    use ContentV2Category;

    /**
     * Обновление медиа-контента карточки товара
     *
     * `content/v2/media/save`
     *
     * @param string $vendorCode Артикул продавца
     * @param array  $data       Ссылки на изображения
     *
     * @return array
     */
    public function update(string $vendorCode, array $data): array
    {
        if (count($data) > 30) {
            throw new RuntimeException(
                'Count data media links must be less then 30'
            );
        }

        return $this->request(
            'POST', 'media/save', [
                'vendorCode' => $vendorCode,
                'data' => $data
            ]
        );
    }

    /**
     * Обновление медиа-контента карточки товара
     *
     * `content/v2/media/file`
     *
     * @param string          $vendorCode  Артикул продавца
     * @param int             $photoNumber Номер изображения
     * @param string|resource $uploadFile  Контент или файл для
     *                                     загрузки
     *
     * @return array
     */
    public function addFile(
        string $vendorCode,
        int $photoNumber,
        string|\resource $uploadFile
    ): array {
        if (is_file($uploadFile)) {
            $uploadFile = file_get_contents($uploadFile);
        }

        return $this->request(
            'POST', 'media/file', headers: [
                'X-Vendor-Code' => $vendorCode,
                'X-Photo-Number' => $photoNumber
            ], multipart: [
                [
                    'name' => 'uploadfile',
                    'contents' => $uploadFile,
                ]
            ]
        );
    }
}
