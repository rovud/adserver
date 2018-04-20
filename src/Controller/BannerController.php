<?php

namespace Rovud\AdServer\Controller;

class BannerController
{
    use InitStorageTrait;

    protected $storage;

    public function __construct()
    {
        $this->storage = $this->getStorage('banner');
    }

    /**
     * @url GET /
     * @url GET /$id
     */
    public function index($id = null)
    {
        return $this->storage->find($id);
    }

    /**
     *
     * @url DELETE /$id
     */
    public function deleteBanner($id)
    {
        $this->storage->delete($id);

        return $id;
    }

    /**
     * @url POST /
     * @url PUT /$id
     */
    public function saveBanner($id = null, $data)
    {
        if ($id !== null) {
            $this->storage->update($id, $data);
        } else {
            $id = $this->storage->create($data);
        }

        return $id;
    }
}