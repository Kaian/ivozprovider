<?php

namespace Ivoz\Kam\Domain\Model\UsersCdr;

use Ivoz\Core\Domain\Model\EntityInterface;

interface UsersCdrInterface extends EntityInterface
{
    /**
     * @return string
     */
    public function getOwner();

    /**
     * @return string
     */
    public function getParty();

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime();

    /**
     * Get endTime
     *
     * @return \DateTime
     */
    public function getEndTime();

    /**
     * Get duration
     *
     * @return float
     */
    public function getDuration();

    /**
     * Get direction
     *
     * @return string | null
     */
    public function getDirection();

    /**
     * Get caller
     *
     * @return string | null
     */
    public function getCaller();

    /**
     * Get callee
     *
     * @return string | null
     */
    public function getCallee();

    /**
     * Get diversion
     *
     * @return string | null
     */
    public function getDiversion();

    /**
     * Get referee
     *
     * @return string | null
     */
    public function getReferee();

    /**
     * Get referrer
     *
     * @return string | null
     */
    public function getReferrer();

    /**
     * Get callid
     *
     * @return string | null
     */
    public function getCallid();

    /**
     * Get callidHash
     *
     * @return string | null
     */
    public function getCallidHash();

    /**
     * Get xcallid
     *
     * @return string | null
     */
    public function getXcallid();

    /**
     * Get hidden
     *
     * @return boolean
     */
    public function getHidden();

    /**
     * Set brand
     *
     * @param \Ivoz\Provider\Domain\Model\Brand\BrandInterface $brand | null
     *
     * @return static
     */
    public function setBrand(\Ivoz\Provider\Domain\Model\Brand\BrandInterface $brand = null);

    /**
     * Get brand
     *
     * @return \Ivoz\Provider\Domain\Model\Brand\BrandInterface | null
     */
    public function getBrand();

    /**
     * Set company
     *
     * @param \Ivoz\Provider\Domain\Model\Company\CompanyInterface $company | null
     *
     * @return static
     */
    public function setCompany(\Ivoz\Provider\Domain\Model\Company\CompanyInterface $company = null);

    /**
     * Get company
     *
     * @return \Ivoz\Provider\Domain\Model\Company\CompanyInterface | null
     */
    public function getCompany();

    /**
     * Set user
     *
     * @param \Ivoz\Provider\Domain\Model\User\UserInterface $user | null
     *
     * @return static
     */
    public function setUser(\Ivoz\Provider\Domain\Model\User\UserInterface $user = null);

    /**
     * Get user
     *
     * @return \Ivoz\Provider\Domain\Model\User\UserInterface | null
     */
    public function getUser();

    /**
     * Set friend
     *
     * @param \Ivoz\Provider\Domain\Model\Friend\FriendInterface $friend | null
     *
     * @return static
     */
    public function setFriend(\Ivoz\Provider\Domain\Model\Friend\FriendInterface $friend = null);

    /**
     * Get friend
     *
     * @return \Ivoz\Provider\Domain\Model\Friend\FriendInterface | null
     */
    public function getFriend();

    /**
     * Set residentialDevice
     *
     * @param \Ivoz\Provider\Domain\Model\ResidentialDevice\ResidentialDeviceInterface $residentialDevice | null
     *
     * @return static
     */
    public function setResidentialDevice(\Ivoz\Provider\Domain\Model\ResidentialDevice\ResidentialDeviceInterface $residentialDevice = null);

    /**
     * Get residentialDevice
     *
     * @return \Ivoz\Provider\Domain\Model\ResidentialDevice\ResidentialDeviceInterface | null
     */
    public function getResidentialDevice();

    /**
     * Set retailAccount
     *
     * @param \Ivoz\Provider\Domain\Model\RetailAccount\RetailAccountInterface $retailAccount | null
     *
     * @return static
     */
    public function setRetailAccount(\Ivoz\Provider\Domain\Model\RetailAccount\RetailAccountInterface $retailAccount = null);

    /**
     * Get retailAccount
     *
     * @return \Ivoz\Provider\Domain\Model\RetailAccount\RetailAccountInterface | null
     */
    public function getRetailAccount();
}
