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
use Whatis\WBAPI\Service\Payload;
use Whatis\WBAPI\Attribute\Mapping;

use Psr\Http\Message\StreamInterface;
use GuzzleHttp\Psr7\MultipartStream;
use RuntimeException;
use resource;

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
    #[Mapping('media/save')]
    public function update(string $vendorCode, array $data): array
    {
        if (count($data) > 30) {
            throw new RuntimeException(
                'Count data media links must be less then 30'
            );
        }

        return $this->request('POST', 'media/save', [
            'vendorCode' => $vendorCode,
            'data' => $data
        ]);
    }

    /**
     * Получить контент файла из ресурса
     *
     * @param string|resource|StreamInterface $file Файл
     *
     * @return string|resource|StreamInterface
     */
    protected function getFile(
        string|resource|StreamInterface $file
    ): string|resource|StreamInterface {
        if (is_resource($file)) {
            return $file;
        }

        if (is_a($file, StreamInterface::class)) {
            return $file;
        }

        return is_file($file) ? file_get_contents($file) : $file;
    }

    /**
     * Обновление медиа-контента карточки товара
     *
     * `content/v2/media/file`
     *
     * @param string          $vendorCode  Артикул продавца
     * @param int             $photoNumber Номер изображения
     * @param string|resource|StreamInterface $uploadFile Изображение
     *
     * @return mixed
     */
    #[Mapping('media/file')]
    public function addFile(
        string $vendorCode,
        int $photoNumber,
        string|resource|StreamInterface $uploadFile
    ): mixed {
        return $this->request(
            'POST', 'media/file', Payload::make()
                ->withHeaders([
                    'X-Vendor-Code' => $vendorCode,
                    'X-Photo-Number' => $photoNumber
                ])
                ->withBody(new MultipartStream([[
                    'name' => 'uploadfile',
                    'contents' => $this->getFile($uploadFile),
                ]]))
        );
    }
}
