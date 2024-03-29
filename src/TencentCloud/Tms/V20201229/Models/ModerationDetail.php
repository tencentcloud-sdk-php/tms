<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文本审核明细结果
 *
 * @method string getSuggestion() 获取审核建议，Block表示建议拦截，Review表示建议人工复审，Pass表示建议放行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuggestion(string $Suggestion) 设置审核建议，Block表示建议拦截，Review表示建议人工复审，Pass表示建议放行
注意：此字段可能返回 null，表示取不到有效值。
 * @method LabelGrade getLabel() 获取命中标签，含标签码和一二三级标签名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(LabelGrade $Label) 设置命中标签，含标签码和一二三级标签名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScore() 获取标签得分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(integer $Score) 设置标签得分
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTcLabelCodes() 获取label对应腾讯侧命中标签码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTcLabelCodes(array $TcLabelCodes) 设置label对应腾讯侧命中标签码
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLibResults() 获取库检测命中详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLibResults(array $LibResults) 设置库检测命中详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getModelResults() 获取模型检测详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelResults(array $ModelResults) 设置模型检测详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method SentimentDetail getSentimentResult() 获取情绪正负向检测结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSentimentResult(SentimentDetail $SentimentResult) 设置情绪正负向检测结果
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModerationDetail extends AbstractModel
{
    /**
     * @var string 审核建议，Block表示建议拦截，Review表示建议人工复审，Pass表示建议放行
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Suggestion;

    /**
     * @var LabelGrade 命中标签，含标签码和一二三级标签名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var integer 标签得分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @var array label对应腾讯侧命中标签码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TcLabelCodes;

    /**
     * @var array 库检测命中详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LibResults;

    /**
     * @var array 模型检测详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelResults;

    /**
     * @var SentimentDetail 情绪正负向检测结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SentimentResult;

    /**
     * @param string $Suggestion 审核建议，Block表示建议拦截，Review表示建议人工复审，Pass表示建议放行
注意：此字段可能返回 null，表示取不到有效值。
     * @param LabelGrade $Label 命中标签，含标签码和一二三级标签名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Score 标签得分
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TcLabelCodes label对应腾讯侧命中标签码
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LibResults 库检测命中详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ModelResults 模型检测详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param SentimentDetail $SentimentResult 情绪正负向检测结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = new LabelGrade();
            $this->Label->deserialize($param["Label"]);
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("TcLabelCodes",$param) and $param["TcLabelCodes"] !== null) {
            $this->TcLabelCodes = $param["TcLabelCodes"];
        }

        if (array_key_exists("LibResults",$param) and $param["LibResults"] !== null) {
            $this->LibResults = [];
            foreach ($param["LibResults"] as $key => $value){
                $obj = new LibCheckResult();
                $obj->deserialize($value);
                array_push($this->LibResults, $obj);
            }
        }

        if (array_key_exists("ModelResults",$param) and $param["ModelResults"] !== null) {
            $this->ModelResults = [];
            foreach ($param["ModelResults"] as $key => $value){
                $obj = new ModelResult();
                $obj->deserialize($value);
                array_push($this->ModelResults, $obj);
            }
        }

        if (array_key_exists("SentimentResult",$param) and $param["SentimentResult"] !== null) {
            $this->SentimentResult = new SentimentDetail();
            $this->SentimentResult->deserialize($param["SentimentResult"]);
        }
    }
}
