<?php

namespace Rovud\AdServer\Controller;

class CampaignController
{
    use InitStorageTrait;

    protected $storage;

    public function __construct()
    {
        $this->storage = $this->getStorage('campaign');
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
    public function deleteCampaign($id)
    {
        $this->storage->delete($id);

        return $id;
    }

    /**
     * Saves a campaign to the storage
     *
     * @url POST /
     * @url PUT /$id
     */
    public function saveCampaign($id = null, $data)
    {
        if ($id !== null) {
            $this->storage->update($id, $data);
        } else {
            $id = $this->storage->create($data);
        }

        return $id;
    }

    /**
     * Saves a campaign with banners
     */
    public function campaignAndBanners($data)
    {
        $campaign_id = $this->storage->create($data);
        $bannerStorage = $this->getStorage('banner');

        foreach ($data->banners as $banner) {
            $banner->campaign_id = $campaign_id;
            $bannerStorage->create($banner);
        }

        return $campaign_id;
    }
}
