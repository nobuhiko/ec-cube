<?php
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */


namespace Eccube\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseInfo
 *
 * @ORM\Table(name="dtb_base_info")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="Eccube\Repository\BaseInfoRepository")
 * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
 */
class BaseInfo extends \Eccube\Entity\AbstractEntity
{
    use PointRateTrait;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_name", type="string", length=255, nullable=true)
     */
    private $company_name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_kana", type="string", length=255, nullable=true)
     */
    private $company_kana;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zip01", type="string", length=3, nullable=true)
     */
    private $zip01;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zip02", type="string", length=4, nullable=true)
     */
    private $zip02;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zipcode", type="string", length=7, nullable=true)
     */
    private $zipcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="addr01", type="string", length=255, nullable=true)
     */
    private $addr01;

    /**
     * @var string|null
     *
     * @ORM\Column(name="addr02", type="string", length=255, nullable=true)
     */
    private $addr02;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel01", type="string", length=5, nullable=true)
     */
    private $tel01;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel02", type="string", length=4, nullable=true)
     */
    private $tel02;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel03", type="string", length=4, nullable=true)
     */
    private $tel03;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax01", type="string", length=5, nullable=true)
     */
    private $fax01;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax02", type="string", length=4, nullable=true)
     */
    private $fax02;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax03", type="string", length=4, nullable=true)
     */
    private $fax03;

    /**
     * @var string|null
     *
     * @ORM\Column(name="business_hour", type="string", length=255, nullable=true)
     */
    private $business_hour;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email01", type="string", length=255, nullable=true)
     */
    private $email01;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email02", type="string", length=255, nullable=true)
     */
    private $email02;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email03", type="string", length=255, nullable=true)
     */
    private $email03;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email04", type="string", length=255, nullable=true)
     */
    private $email04;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shop_name", type="string", length=255, nullable=true)
     */
    private $shop_name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shop_kana", type="string", length=255, nullable=true)
     */
    private $shop_kana;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shop_name_eng", type="string", length=255, nullable=true)
     */
    private $shop_name_eng;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetimetz")
     */
    private $update_date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="good_traded", type="string", length=4000, nullable=true)
     */
    private $good_traded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="string", length=4000, nullable=true)
     */
    private $message;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latitude", type="decimal", precision=9, scale=6, nullable=true)
     */
    private $latitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="longitude", type="decimal", precision=9, scale=6, nullable=true)
     */
    private $longitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="delivery_free_amount", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $delivery_free_amount;

    /**
     * @var int|null
     *
     * @ORM\Column(name="delivery_free_quantity", type="integer", nullable=true, options={"unsigned":true})
     */
    private $delivery_free_quantity;

    /**
     * @var int|null
     *
     * @ORM\Column(name="option_multiple_shipping", type="smallint", nullable=true, options={"unsigned":true,"default":0})
     */
    private $option_multiple_shipping = 0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="option_mypage_order_status_display", type="smallint", nullable=true, options={"unsigned":true,"default":1})
     */
    private $option_mypage_order_status_display = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nostock_hidden", type="smallint", nullable=true, options={"unsigned":true,"default":0})
     */
    private $nostock_hidden = 0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="option_favorite_product", type="smallint", nullable=true, options={"unsigned":true,"default":1})
     */
    private $option_favorite_product = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="option_product_delivery_fee", type="smallint", nullable=true, options={"unsigned":true,"default":0})
     */
    private $option_product_delivery_fee = 0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="option_product_tax_rule", type="smallint", nullable=true, options={"unsigned":true,"default":0})
     */
    private $option_product_tax_rule = 0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="option_customer_activate", type="smallint", nullable=true, options={"unsigned":true,"default":1})
     */
    private $option_customer_activate = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="option_remember_me", type="smallint", nullable=true, options={"unsigned":true,"default":0})
     */
    private $option_remember_me = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="authentication_key", type="string", length=255, nullable=true)
     */
    private $authentication_key;

    /**
     * @var \Eccube\Entity\Master\Country
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Master\Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
     */
    private $Country;

    /**
     * @var \Eccube\Entity\Master\Pref
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Master\Pref")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pref", referencedColumnName="id")
     * })
     * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
     */
    private $Pref;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set companyName.
     *
     * @param string|null $companyName
     *
     * @return BaseInfo
     */
    public function setCompanyName($companyName = null)
    {
        $this->company_name = $companyName;

        return $this;
    }

    /**
     * Get companyName.
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * Set companyKana.
     *
     * @param string|null $companyKana
     *
     * @return BaseInfo
     */
    public function setCompanyKana($companyKana = null)
    {
        $this->company_kana = $companyKana;

        return $this;
    }

    /**
     * Get companyKana.
     *
     * @return string|null
     */
    public function getCompanyKana()
    {
        return $this->company_kana;
    }

    /**
     * Set zip01.
     *
     * @param string|null $zip01
     *
     * @return BaseInfo
     */
    public function setZip01($zip01 = null)
    {
        $this->zip01 = $zip01;

        return $this;
    }

    /**
     * Get zip01.
     *
     * @return string|null
     */
    public function getZip01()
    {
        return $this->zip01;
    }

    /**
     * Set zip02.
     *
     * @param string|null $zip02
     *
     * @return BaseInfo
     */
    public function setZip02($zip02 = null)
    {
        $this->zip02 = $zip02;

        return $this;
    }

    /**
     * Get zip02.
     *
     * @return string|null
     */
    public function getZip02()
    {
        return $this->zip02;
    }

    /**
     * Set zipcode.
     *
     * @param string|null $zipcode
     *
     * @return BaseInfo
     */
    public function setZipcode($zipcode = null)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode.
     *
     * @return string|null
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set addr01.
     *
     * @param string|null $addr01
     *
     * @return BaseInfo
     */
    public function setAddr01($addr01 = null)
    {
        $this->addr01 = $addr01;

        return $this;
    }

    /**
     * Get addr01.
     *
     * @return string|null
     */
    public function getAddr01()
    {
        return $this->addr01;
    }

    /**
     * Set addr02.
     *
     * @param string|null $addr02
     *
     * @return BaseInfo
     */
    public function setAddr02($addr02 = null)
    {
        $this->addr02 = $addr02;

        return $this;
    }

    /**
     * Get addr02.
     *
     * @return string|null
     */
    public function getAddr02()
    {
        return $this->addr02;
    }

    /**
     * Set tel01.
     *
     * @param string|null $tel01
     *
     * @return BaseInfo
     */
    public function setTel01($tel01 = null)
    {
        $this->tel01 = $tel01;

        return $this;
    }

    /**
     * Get tel01.
     *
     * @return string|null
     */
    public function getTel01()
    {
        return $this->tel01;
    }

    /**
     * Set tel02.
     *
     * @param string|null $tel02
     *
     * @return BaseInfo
     */
    public function setTel02($tel02 = null)
    {
        $this->tel02 = $tel02;

        return $this;
    }

    /**
     * Get tel02.
     *
     * @return string|null
     */
    public function getTel02()
    {
        return $this->tel02;
    }

    /**
     * Set tel03.
     *
     * @param string|null $tel03
     *
     * @return BaseInfo
     */
    public function setTel03($tel03 = null)
    {
        $this->tel03 = $tel03;

        return $this;
    }

    /**
     * Get tel03.
     *
     * @return string|null
     */
    public function getTel03()
    {
        return $this->tel03;
    }

    /**
     * Set fax01.
     *
     * @param string|null $fax01
     *
     * @return BaseInfo
     */
    public function setFax01($fax01 = null)
    {
        $this->fax01 = $fax01;

        return $this;
    }

    /**
     * Get fax01.
     *
     * @return string|null
     */
    public function getFax01()
    {
        return $this->fax01;
    }

    /**
     * Set fax02.
     *
     * @param string|null $fax02
     *
     * @return BaseInfo
     */
    public function setFax02($fax02 = null)
    {
        $this->fax02 = $fax02;

        return $this;
    }

    /**
     * Get fax02.
     *
     * @return string|null
     */
    public function getFax02()
    {
        return $this->fax02;
    }

    /**
     * Set fax03.
     *
     * @param string|null $fax03
     *
     * @return BaseInfo
     */
    public function setFax03($fax03 = null)
    {
        $this->fax03 = $fax03;

        return $this;
    }

    /**
     * Get fax03.
     *
     * @return string|null
     */
    public function getFax03()
    {
        return $this->fax03;
    }

    /**
     * Set businessHour.
     *
     * @param string|null $businessHour
     *
     * @return BaseInfo
     */
    public function setBusinessHour($businessHour = null)
    {
        $this->business_hour = $businessHour;

        return $this;
    }

    /**
     * Get businessHour.
     *
     * @return string|null
     */
    public function getBusinessHour()
    {
        return $this->business_hour;
    }

    /**
     * Set email01.
     *
     * @param string|null $email01
     *
     * @return BaseInfo
     */
    public function setEmail01($email01 = null)
    {
        $this->email01 = $email01;

        return $this;
    }

    /**
     * Get email01.
     *
     * @return string|null
     */
    public function getEmail01()
    {
        return $this->email01;
    }

    /**
     * Set email02.
     *
     * @param string|null $email02
     *
     * @return BaseInfo
     */
    public function setEmail02($email02 = null)
    {
        $this->email02 = $email02;

        return $this;
    }

    /**
     * Get email02.
     *
     * @return string|null
     */
    public function getEmail02()
    {
        return $this->email02;
    }

    /**
     * Set email03.
     *
     * @param string|null $email03
     *
     * @return BaseInfo
     */
    public function setEmail03($email03 = null)
    {
        $this->email03 = $email03;

        return $this;
    }

    /**
     * Get email03.
     *
     * @return string|null
     */
    public function getEmail03()
    {
        return $this->email03;
    }

    /**
     * Set email04.
     *
     * @param string|null $email04
     *
     * @return BaseInfo
     */
    public function setEmail04($email04 = null)
    {
        $this->email04 = $email04;

        return $this;
    }

    /**
     * Get email04.
     *
     * @return string|null
     */
    public function getEmail04()
    {
        return $this->email04;
    }

    /**
     * Set shopName.
     *
     * @param string|null $shopName
     *
     * @return BaseInfo
     */
    public function setShopName($shopName = null)
    {
        $this->shop_name = $shopName;

        return $this;
    }

    /**
     * Get shopName.
     *
     * @return string|null
     */
    public function getShopName()
    {
        return $this->shop_name;
    }

    /**
     * Set shopKana.
     *
     * @param string|null $shopKana
     *
     * @return BaseInfo
     */
    public function setShopKana($shopKana = null)
    {
        $this->shop_kana = $shopKana;

        return $this;
    }

    /**
     * Get shopKana.
     *
     * @return string|null
     */
    public function getShopKana()
    {
        return $this->shop_kana;
    }

    /**
     * Set shopNameEng.
     *
     * @param string|null $shopNameEng
     *
     * @return BaseInfo
     */
    public function setShopNameEng($shopNameEng = null)
    {
        $this->shop_name_eng = $shopNameEng;

        return $this;
    }

    /**
     * Get shopNameEng.
     *
     * @return string|null
     */
    public function getShopNameEng()
    {
        return $this->shop_name_eng;
    }

    /**
     * Set updateDate.
     *
     * @param \DateTime $updateDate
     *
     * @return BaseInfo
     */
    public function setUpdateDate($updateDate)
    {
        $this->update_date = $updateDate;

        return $this;
    }

    /**
     * Get updateDate.
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }

    /**
     * Set goodTraded.
     *
     * @param string|null $goodTraded
     *
     * @return BaseInfo
     */
    public function setGoodTraded($goodTraded = null)
    {
        $this->good_traded = $goodTraded;

        return $this;
    }

    /**
     * Get goodTraded.
     *
     * @return string|null
     */
    public function getGoodTraded()
    {
        return $this->good_traded;
    }

    /**
     * Set message.
     *
     * @param string|null $message
     *
     * @return BaseInfo
     */
    public function setMessage($message = null)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message.
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set latitude.
     *
     * @param string|null $latitude
     *
     * @return BaseInfo
     */
    public function setLatitude($latitude = null)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude.
     *
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude.
     *
     * @param string|null $longitude
     *
     * @return BaseInfo
     */
    public function setLongitude($longitude = null)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude.
     *
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set deliveryFreeAmount.
     *
     * @param string|null $deliveryFreeAmount
     *
     * @return BaseInfo
     */
    public function setDeliveryFreeAmount($deliveryFreeAmount = null)
    {
        $this->delivery_free_amount = $deliveryFreeAmount;

        return $this;
    }

    /**
     * Get deliveryFreeAmount.
     *
     * @return string|null
     */
    public function getDeliveryFreeAmount()
    {
        return $this->delivery_free_amount;
    }

    /**
     * Set deliveryFreeQuantity.
     *
     * @param int|null $deliveryFreeQuantity
     *
     * @return BaseInfo
     */
    public function setDeliveryFreeQuantity($deliveryFreeQuantity = null)
    {
        $this->delivery_free_quantity = $deliveryFreeQuantity;

        return $this;
    }

    /**
     * Get deliveryFreeQuantity.
     *
     * @return int|null
     */
    public function getDeliveryFreeQuantity()
    {
        return $this->delivery_free_quantity;
    }

    /**
     * Set optionMultipleShipping.
     *
     * @param int|null $optionMultipleShipping
     *
     * @return BaseInfo
     */
    public function setOptionMultipleShipping($optionMultipleShipping = null)
    {
        $this->option_multiple_shipping = $optionMultipleShipping;

        return $this;
    }

    /**
     * Get optionMultipleShipping.
     *
     * @return int|null
     */
    public function getOptionMultipleShipping()
    {
        return $this->option_multiple_shipping;
    }

    /**
     * Set optionMypageOrderStatusDisplay.
     *
     * @param int|null $optionMypageOrderStatusDisplay
     *
     * @return BaseInfo
     */
    public function setOptionMypageOrderStatusDisplay($optionMypageOrderStatusDisplay = null)
    {
        $this->option_mypage_order_status_display = $optionMypageOrderStatusDisplay;

        return $this;
    }

    /**
     * Get optionMypageOrderStatusDisplay.
     *
     * @return int|null
     */
    public function getOptionMypageOrderStatusDisplay()
    {
        return $this->option_mypage_order_status_display;
    }

    /**
     * Set nostockHidden.
     *
     * @param int|null $nostockHidden
     *
     * @return BaseInfo
     */
    public function setNostockHidden($nostockHidden = null)
    {
        $this->nostock_hidden = $nostockHidden;

        return $this;
    }

    /**
     * Get nostockHidden.
     *
     * @return int|null
     */
    public function getNostockHidden()
    {
        return $this->nostock_hidden;
    }

    /**
     * Set optionFavoriteProduct.
     *
     * @param int|null $optionFavoriteProduct
     *
     * @return BaseInfo
     */
    public function setOptionFavoriteProduct($optionFavoriteProduct = null)
    {
        $this->option_favorite_product = $optionFavoriteProduct;

        return $this;
    }

    /**
     * Get optionFavoriteProduct.
     *
     * @return int|null
     */
    public function getOptionFavoriteProduct()
    {
        return $this->option_favorite_product;
    }

    /**
     * Set optionProductDeliveryFee.
     *
     * @param int|null $optionProductDeliveryFee
     *
     * @return BaseInfo
     */
    public function setOptionProductDeliveryFee($optionProductDeliveryFee = null)
    {
        $this->option_product_delivery_fee = $optionProductDeliveryFee;

        return $this;
    }

    /**
     * Get optionProductDeliveryFee.
     *
     * @return int|null
     */
    public function getOptionProductDeliveryFee()
    {
        return $this->option_product_delivery_fee;
    }

    /**
     * Set optionProductTaxRule.
     *
     * @param int|null $optionProductTaxRule
     *
     * @return BaseInfo
     */
    public function setOptionProductTaxRule($optionProductTaxRule = null)
    {
        $this->option_product_tax_rule = $optionProductTaxRule;

        return $this;
    }

    /**
     * Get optionProductTaxRule.
     *
     * @return int|null
     */
    public function getOptionProductTaxRule()
    {
        return $this->option_product_tax_rule;
    }

    /**
     * Set optionCustomerActivate.
     *
     * @param int|null $optionCustomerActivate
     *
     * @return BaseInfo
     */
    public function setOptionCustomerActivate($optionCustomerActivate = null)
    {
        $this->option_customer_activate = $optionCustomerActivate;

        return $this;
    }

    /**
     * Get optionCustomerActivate.
     *
     * @return int|null
     */
    public function getOptionCustomerActivate()
    {
        return $this->option_customer_activate;
    }

    /**
     * Set optionRememberMe.
     *
     * @param int|null $optionRememberMe
     *
     * @return BaseInfo
     */
    public function setOptionRememberMe($optionRememberMe = null)
    {
        $this->option_remember_me = $optionRememberMe;

        return $this;
    }

    /**
     * Get optionRememberMe.
     *
     * @return int|null
     */
    public function getOptionRememberMe()
    {
        return $this->option_remember_me;
    }

    /**
     * Set authenticationKey.
     *
     * @param string|null $authenticationKey
     *
     * @return BaseInfo
     */
    public function setAuthenticationKey($authenticationKey = null)
    {
        $this->authentication_key = $authenticationKey;

        return $this;
    }

    /**
     * Get authenticationKey.
     *
     * @return string|null
     */
    public function getAuthenticationKey()
    {
        return $this->authentication_key;
    }

    /**
     * Set country.
     *
     * @param \Eccube\Entity\Master\Country|null $country
     *
     * @return BaseInfo
     */
    public function setCountry(\Eccube\Entity\Master\Country $country = null)
    {
        $this->Country = $country;

        return $this;
    }

    /**
     * Get country.
     *
     * @return \Eccube\Entity\Master\Country|null
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * Set pref.
     *
     * @param \Eccube\Entity\Master\Pref|null $pref
     *
     * @return BaseInfo
     */
    public function setPref(\Eccube\Entity\Master\Pref $pref = null)
    {
        $this->Pref = $pref;

        return $this;
    }

    /**
     * Get pref.
     *
     * @return \Eccube\Entity\Master\Pref|null
     */
    public function getPref()
    {
        return $this->Pref;
    }
}
