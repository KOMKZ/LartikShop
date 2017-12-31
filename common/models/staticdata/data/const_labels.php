<?php
return [
    'al_id' => '主键',
    'al_module' => '模块id',
    'al_action' => 'al_action',
    'al_uid' => '用户id',
    'al_object_id' => '对象id',
    'al_app_id' => 'APPid',
    'al_ip' => 'IP',
    'al_agent_info' => '代理信息',
    'al_data' => '相关数据',
    'al_created_time' => '创建时间',
    'ct_id' => '购物车项目id',
    'ct_belong_uid' => '所属用户',
    'ct_object_id' => '购物车条目主id',
    'ct_object_value' => 'ct_object_value',
    'ct_object_type' => '条目的类型',
    'ct_object_data' => '条目该时刻的数据',
    'ct_discount_data' => '折扣及优惠数据选择',
    'ct_object_classification' => '对象的分类',
    'ct_object_status' => '条目的状态',
    'ct_amount' => '该条目的数量',
    'ct_price' => '该时刻的条目价格',
    'ct_price_type' => '价格类型',
    'ct_object_title' => '条目该时刻的标题',
    'ct_created_at' => '创建时间',
    'file_id' => '主键',
    'file_save_name' => '下载名称',
    'file_real_name' => '文件真实名称，不包含后缀',
    'file_save_type' => '存储媒介类型',
    'file_is_tmp' => '文件时效性',
    'file_valid_time' => '文件有效时间',
    'file_is_private' => '文件访问属性',
    'file_category' => '文件分类',
    'file_prefix' => '文件存储前缀',
    'file_md5_value' => '文件md5值',
    'file_medium_info' => '文件存储媒介信息',
    'file_ext' => '文件后缀',
    'file_mime_type' => '文件媒体类型',
    'file_created_time' => '文件创建时间',
    'file_task_id' => '主键',
    'file_task_type' => '文件任务的类型',
    'file_task_code' => '文件任务的业务号',
    'file_task_start_at' => '文件任务的开始时间',
    'file_task_invalid_at' => '文件任务的失效时间',
    'file_task_completed_at' => '文件任务的完成时间',
    'file_task_status' => '文件任务的状态',
    'file_task_data' => '文件任务执行相关数据',
    'g_id' => '商品主键',
    'g_primary_name' => '商品主要名称',
    'g_secondary_name' => '商品第二名称',
    'g_cls_id' => '主键',
    'g_status' => '商品状态',
    'g_create_uid' => '创建用户id',
    'g_update_uid' => '最后更新用户id',
    'g_created_at' => '商品创建时间',
    'g_updated_at' => '商品创建时间',
    'g_start_at' => '商品上架时间',
    'g_end_at' => '商品结束时间',
    'g_atr_id' => '商品属性id',
    'g_atr_code' => '商品属性码',
    'g_atr_type' => '商品属性分类',
    'g_atr_opt_img' => '商品属性选项是否能有图片',
    'g_atr_name' => '商品属性名',
    'g_atr_show_name' => '商品展示属性名',
    'g_atr_cls_id' => '商品属性所属分类',
    'g_atr_cls_type' => '分类类别,如cls说明属于分类,goods说明属于商品',
    'g_atr_created_at' => '商品属性创建时间',
    'g_cls_name' => '商品分类的名称',
    'g_cls_show_name' => '商品分类的展示名称',
    'g_cls_pid' => '商品分类父级分类名称',
    'g_cls_created_at' => '商品创建时间',
    'gd_id' => '主键',
    'g_intro_text' => '商品详细介绍',
    'gm_id' => '主键',
    'gm_value' => '商品元属性的值',
    'gm_status' => '商品属性状态',
    'gm_created_at' => '创建时间',
    'gr_id' => '主键',
    'gr_status' => '商品属性状态',
    'gr_created_at' => '创建时间',
    'g_opt_id' => '主键',
    'g_opt_value' => '选项值',
    'g_opt_name' => '商品属性选项值',
    'g_opt_img' => '商品属性选项值图片',
    'g_opt_created_at' => '创建时间',
    'g_sku_id' => 'sku id',
    'g_sku_name' => '商品sku名称',
    'g_sku_value_name' => '商品sku值label',
    'g_sku_value' => '商品sku值',
    'g_sku_stock_num' => '库存量',
    'g_sku_price' => 'sku实体实际价格',
    'g_sku_sale_price' => 'sku实体销售价格',
    'g_sku_status' => 'sku状态',
    'g_sku_created_at' => 'sku创建时间',
    'g_sku_updated_at' => 'sku更新时间',
    'g_sku_create_uid' => 'sku创建者',
    'g_sku_update_uid' => 'sku更新者',
    'gs_id' => '主键',
    'gs_type' => '资源类型',
    'gs_name' => '资源的名称',
    'gs_sid' => '资源id',
    'gs_cls_type' => '资源所属分类',
    'gs_cls_id' => '资源分类的id',
    'gs_created_at' => 'gs_created_at',
    'mail_id' => '邮件主体id',
    'mail_meta_data' => '邮件发送元数据',
    'mail_title' => '邮件标题',
    'mail_type' => '邮件类型/模板',
    'mail_content' => '邮件的内容',
    'mail_content_type' => '内容的类型',
    'mail_attachments' => '邮件的附件',
    'mail_create_uid' => '邮件创建用户',
    'mail_is_cron' => '是否是cron邮件',
    'mail_created_at' => '邮件的创建时间',
    'mail_send_id' => '主键',
    'mail_sender' => '发件人',
    'mail_receipt' => '收件人',
    'mail_status' => '发件状态',
    'mail_error' => '错误信息',
    'mail_consume' => '消耗时间',
    'mail_send_at' => '发送时间',
    'mail_updated_at' => '更新时间',
    'mm_id' => '主键',
    'mm_type' => '消息类型',
    'mm_content_type' => '消息内容的类型',
    'mm_content' => '消息内容',
    'mm_tpl_code' => '消息模板',
    'mm_create_uid' => '创建者uid',
    'mm_vars' => '模板变量参数',
    'mm_receipt_uid' => '接受人uid',
    'mm_created_time' => '创建时间',
    'mtpl_id' => '主键',
    'mtpl_code' => '模板代号',
    'mtpl_content' => '模板内容',
    'mtpl_created_at' => '创建时间',
    'version' => 'version',
    'apply_time' => 'apply_time',
    'nrt_id' => '主键',
    'nrt_nid' => '通知id',
    'nrt_result' => '通知结果响应内容',
    'nrt_created_time' => '主键',
    'od_id' => '订单id',
    'od_type' => '订单类型',
    'od_title' => '订单标题',
    'od_pay_status' => '订单支付状态',
    'od_price' => '订单价格',
    'od_origin_price' => '订单原始价格',
    'od_comment_status' => '订单评论状态',
    'od_refund_status' => '订单退款状态',
    'od_status' => '订单状态',
    'od_belong_storage' => '订单所属仓库',
    'od_logistics_status' => '订单物流状态',
    'od_succ_pay_type' => '订单成功的支付方式',
    'od_pay_mode' => '订单付款方式，分期付款，货到付款，线上全额付款',
    'od_belong_uid' => '订单所属用户id',
    'od_operator_uid' => '订单审核用户id',
    'od_pid' => '订单父订单id',
    'od_number' => '订单编号',
    'od_created_at' => '订单创建时间',
    'od_payed_at' => '订单支付的时间',
    'od_invalid_at' => '订单失效的时间',
    'od_updated_at' => '订单更新时间',
    'od_discount_id' => '主键',
    'od_discount_type' => '折扣类型',
    'od_discount_data_id' => '折扣唯一id',
    'od_discount_class' => '折扣所属类',
    'od_discount_data' => '折扣相关数据',
    'od_discount_description' => '折扣说明',
    'od_discount_slice_value' => '减少的费用',
    'od_discount_created_at' => '创建时间',
    'od_express_id' => '主键',
    'od_express_fee' => '快递费用',
    'od_express_number' => '快递单号',
    'od_express_status' => '订单快递状态',
    'od_express_type' => '快递类型',
    'od_express_target_type' => 'od_express_target_type',
    'od_express_comment' => '备注信息',
    'od_express_created_at' => '创建时间',
    'od_express_updated_at' => '更新时间',
    'og_id' => '订单商品主键',
    'og_g_sku_price' => 'sku实体实际价格',
    'og_g_sku_total_price' => '多个sku最终价格',
    'og_g_bug_number' => '购买数量',
    'og_g_sku_sale_price' => 'sku销售价格',
    'og_g_sku_name' => '商品sku名称',
    'og_g_sku_value_name' => '商品sku值label',
    'og_g_sku_data' => '商品sku当时数据',
    'og_discount_data' => '订单sku折扣和优惠数据',
    'og_created_at' => '创建时间',
    'og_updated_at' => '更新时间',
    'od_receaddr_id' => '主键',
    'rece_addr_id' => '主键',
    'rece_name' => '收货人姓名',
    'rece_contact_number' => '收货人手机号',
    'rece_location_id' => '收货人地区id',
    'rece_location_string' => '收货人详细地址',
    'rece_full_addr' => '收货人完整收货地址',
    'rece_tag' => '标签,关键词',
    'rece_belong_uid' => '所属用户id',
    'pt_id' => '支付单id',
    'pt_pay_type' => '支付类型',
    'pt_pre_order' => '预支付单',
    'pt_pre_order_type' => '预支付单数据类型',
    'pt_pay_status' => '支付状态',
    'pt_status' => '状态',
    'pt_belong_trans_number' => '所属交易编号',
    'pt_third_data' => '第三方相关数据',
    'pt_timeout' => '失效时间',
    'pt_created_at' => '创建时间',
    'pt_updated_at' => '更新时间',
    'tb_id' => '主键',
    'tb_out_trade_no' => '交易号',
    'tb_trade_no' => '第三方交易号',
    'tb_type' => '交易类型',
    'tb_pay_type' => '第三方类型',
    'tb_created_at' => '创建时间',
    'tb_no' => '对账批次',
    'tb_bill_data' => '账单内容',
    'tb_third_app_id' => '第三方应用id',
    'tb_app_type' => '所属应用模块',
    't_id' => '主键',
    't_number' => '交易编号',
    't_succ_pay_type' => '成功支付的方式',
    't_pay_status' => '支付状态',
    't_status' => '交易状态',
    't_type' => '交易类型',
    't_fee' => '交易的费用',
    't_fee_type' => '交易费用的类型，货币类型',
    't_pay_at' => '支付时间',
    't_invalid_at' => '失效时间',
    't_created_at' => '创建时间',
    't_updated_at' => '更新时间',
    't_module' => '所属模块',
    't_app_no' => '应用编号',
    't_timeout' => '有效时间',
    't_belong_uid' => '所属用户id',
    't_create_uid' => '创建用户id',
    't_title' => '交易名称',
    't_content' => '交易相关数据',
    'u_id' => '消息所属用户',
    'u_username' => '用户名称',
    'u_auth_key' => '用户校验key',
    'u_password_hash' => '用户密码hash值',
    'u_password_reset_token' => '用户重设密码token',
    'u_access_token' => '用户访问token',
    'u_email' => '用户邮件',
    'u_status' => '用户状态',
    'u_auth_status' => '用户校验状态',
    'u_created_at' => '创建时间',
    'u_updated_at' => '更新时间',
    'u_bill_id' => '用户账单数据主键',
    'u_bill_type' => '变更记录类型',
    'u_bill_fee' => '该次的费用',
    'u_bill_fee_type' => '货币类型',
    'u_bill_related_id' => '相关操作对象id',
    'u_bill_related_type' => '相关操作对象类型',
    'u_bill_trade_no' => '交易号',
    'u_bill_created_at' => '创建时间',
    'u_data_id' => '数据id',
    'u_last_timestamp' => '上次访问的时间',
    'u_remain_time' => '剩余的访问次数',
    'u_data_created_at' => '创建时间',
    'u_ext_id' => '数据id',
    'u_avatar_id1' => '头像文件id_01',
    'u_avatar_id2' => '头像文件id_02',
    'u_ext_created_at' => '创建时间',
    'u_ext_updated_at' => '更新时间',
    'um_id' => '主键',
    'um_msg_id' => '消息主体id',
    'um_status' => '消息状态',
    'um_from_uid' => '来源用户',
    'um_type' => '消息的类型',
    'um_content_type' => '消息内容的类型',
    'um_content' => '消息的内容',
    'um_created_at' => '创建时间',
    'rece_status' => '条目状态',
    'rece_default_addr' => '是否是默认地址',
    'rece_created_at' => '创建时间',
];