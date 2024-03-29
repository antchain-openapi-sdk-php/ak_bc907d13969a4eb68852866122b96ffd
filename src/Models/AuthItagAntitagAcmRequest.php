<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\Ak_bc907d13969a4eb68852866122b96ffd\Models;

use AlibabaCloud\Tea\Model;

class AuthItagAntitagAcmRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 第三方平台用户ID
    /**
     * @var string
     */
    public $accountno;

    // 用户来源
    /**
     * @var string
     */
    public $accountsource;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'accountno'         => 'accountno',
        'accountsource'     => 'accountsource',
    ];

    public function validate()
    {
        Model::validateRequired('accountno', $this->accountno, true);
        Model::validateRequired('accountsource', $this->accountsource, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->accountno) {
            $res['accountno'] = $this->accountno;
        }
        if (null !== $this->accountsource) {
            $res['accountsource'] = $this->accountsource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthItagAntitagAcmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['accountno'])) {
            $model->accountno = $map['accountno'];
        }
        if (isset($map['accountsource'])) {
            $model->accountsource = $map['accountsource'];
        }

        return $model;
    }
}
