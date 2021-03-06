# version 1 → version 2 の変更点

## テンプレート

- template-one-column.php -> page-template/template-one-column.phpに変わることに気をつける

## css

- ys-button → ys-btn

## 設定の再設定が必要な箇所

- OGPデフォルト画像の再設定
- ヘッダーメニュー(グローバルメニュー)の再設定
- Google Analyticsのトラッキングコードタイプ
- サイドバーのモバイル表示（表示するがデフォルトになる）
- 絵文字関連スタイルシート・スクリプトの無効化（設定項目が変わるので「出力する」にしていた場合再設定が必要）
- oembed関連スタイルシート・スクリプトの無効化（設定項目が変わるので「出力する」にしていた場合再設定が必要）
- サイドバーのidが変わるのでサイドバー項目の再設定が必要

## 削除された設定

- AMP Facebookシェアボタン用 app id (ys_amp_share_fb_app_id)
- AMP 通常ビューへのリンク表示 (ys_amp_normal_link_share_btn,ys_amp_normal_link)
- AMP scriptタグを削除してAMPページを作成する  (ys_amp_del_script)
- AMP style属性を削除してAMPページを作成する (ys_amp_del_style)
- AMP AMPページでも記事下のジェットを表示する (ys_is_active_entry_footer_widget_amp)

## 変更された関数

- ys_amp_the_amp_script -> ys_the_amp_script
- ys_extras_apple_touch_icon -> ys_the_apple_touch_icon
- ys_extras_add_canonical -> ys_the_canonical_tag
- ys_extras_adjacent_posts_rel_link_wp_head -> ys_the_rel_link
- ys_extras_add_noindex -> ys_the_noindex
- ys_setup_initialize -> ys_init
- ys_setup_remove_action -> ys_remove_action
- ys_setup_remove_emoji -> ys_remove_emoji
- ys_setup_remove_oembed -> ys_remove_oembed
- ys_extras_load_css_footer_js -> ys_enqueue_css
- ys_utilities_get_theme_version -> ys_get_theme_version
- ys_extras_add_async -> ys_add_async_on_js
- ys_extras_add_amphtml -> ys_the_amphtml
- ys_extras_add_twitter_card -> ys_get_the_twitter_card
- ys_customizer -> ys_theme_customizer
- ys_customizer_color_setting -> ys_customizer_color
- ys_template_get_the_custom_excerpt -> ys_get_the_custom_excerpt
- ys_extras_get_the_archive_title -> ys_get_the_archive_title
- ys_extras_add_facebook_ogp -> ys_get_the_ogp
- ys_extras_add_googleanarytics -> ys_the_google_anarytics
- ys_template_get_front_page_template_part -> ys_get_front_page_template
- ys_extras_more_tag_replace -> ys_more_tag_replace
- ys_amp_replace_image -> ys_amp_convert_image
- ys_utilities_get_the_convert_amp_img -> ys_amp_convert_image
- ys_extras_body_classes -> ys_body_class
- ys_amp_convert_amp -> ys_amp_convert_content
- ys_amp_replace_tag -> ys_amp_convert_html
- ys_amp_replace_oembed -> ys_amp_convert_oembed
- ys_amp_replace_sns -> ys_amp_convert_sns
- ys_amp_replace_iframe -> ys_amp_convert_iframe
- ys_yscomment_wp_list_comments_callback -> ys_wp_list_comments_callback
- ys_extras_comment_form_fields -> ys_comment_form_fields
- ys_extras_no_self_ping -> ys_no_self_ping
- ys_extras_rss_the_post_thumbnail -> ys_rss_add_post_thumbnail
- ys_extras_site_icon_meta_tags -> ys_site_icon_meta_tags
- ys_utilities_get_apple_touch_icon_url -> ys_get_apple_touch_icon_url
- ys_extras_document_title_separator -> ys_document_title_separator
- ys_extras_iframe_responsive -> ys_add_iframe_responsive_container
- ys_extras_excerpt_length -> ys_excerpt_length
- ys_extras_excerpt_more -> ys_excerpt_more
- ys_extras_the_json_ld -> ys_the_json_ld
- ys_template_the_entry_more_text -> ys_the_entry_read_more_text
- ys_utilities_get_image_size -> ys_get_image_size
- ys_utilities_get_the_link_page -> ys_get_the_link_page
- ys_utilities_get_query -> ys_get_posts_args
- ys_utilities_get_rand -> ys_get_posts_args_rand
- ys_utilities_get_the_image_object_meta -> ys_get_the_image_object_meta

## 削除予定の関数

- ys_settings
- ys_get_setting

## 削除された関数

- ys_template_the_related_post
- ys_utilities_get_post_thumbnail
- ys_utilities_get_post_thumbnail_url
- ys_utilities_get_the_image_object_meta
- ys_utilities_get_post_firstimg
- ys_utilities_get_rand
- ys_utilities_get_query
- ys_utilities_get_the_link_page
- ys_utilities_get_image_size
- ys_utilities_get_the_tag_list
- ys_is_ogp_enable
- ys_template_the_taxonomy_list
- ys_template_the_category_list
- ys_template_the_amp_menu
- ys_template_the_entry_header_share
- ys_template_the_entry_more_text
- ys_template_the_head_normal
- ys_template_the_head_tag
- ys_template_the_inline_css
- ys_amp_the_head_amp
- ys_amp_the_amp_script
- ys_extras_apple_touch_icon
- ys_extras_add_canonical
- ys_extras_adjacent_posts_rel_link_wp_head
- ys_extras_add_noindex
- ys_extras_add_load_script_list
- ys_extras_add_async
- ys_extras_add_amphtml
- ys_extras_add_twitter_card
- ys_setup_initialize
- ys_init_change_logo_size
- ys_setup_remove_action
- ys_setup_remove_emoji
- ys_setup_remove_oembed
- ys_utilities_get_theme_version
- ys_utilities_json_encode
- ys_utilities_get_load_script_array
- ys_customizer
- ys_customizer_color_setting
- ys_template_the_follow_sns_list
- ys_template_get_the_custom_excerpt
- ys_extras_get_the_archive_title
- ys_extras_add_facebook_ogp
- ys_extras_add_googleanarytics
- ys_template_the_header_attr
- ys_template_the_content_attr
- ys_template_the_site_hero
- ys_utilities_get_custom_logo_image_src
- ys_template_the_header_site_title_logo
- ys_template_the_header_global_menu
- ys_template_the_sidebar_attr
- ys_template_the_link_pages
- ys_template_the_entry_date
- ys_template_the_post_hero
- ys_template_the_entry_foot_cta
- ys_template_the_entry_foot_widget
- ys_template_get_the_advertisement_format
- ys_template_the_advertisement_under_content
- ys_template_get_the_advertisement_more_tag
- ys_extras_more_tag_replace
- ys_template_get_the_sns_share_buttons
- ys_template_get_the_amp_sns_share_buttons
- ys_template_get_the_sns_share
- ys_template_get_the_subscribe_buttons
- ys_utilities_get_the_user_avatar_img
- ys_amp_replace_image
- ys_template_the_user_avatar
- ys_template_get_the_biography
- ys_template_the_biography
- ys_template_get_the_biography_template
- ys_template_the_footer_attr
- ys_template_the_post_thumbnail
- ys_template_the_fotter_widget
- ys_template_the_copyright
- ys_admin_add_post_option
- ys_admin_save_post_option
- ys_utilities_save_post_option_checkbox
- ys_utilities_sanitize_checkbox_post_option
- ys_template_the_post_categorys
- ys_utilities_get_the_post_categorys
- ys_utilities_get_cat_id_list
- ys_utilities_sanitize_checkbox
- ys_pagination
- ys_admin_add_contactmethods
- ys_admin_show_custom_avatar
- ys_admin_save_custom_avatar
- ys_amp_convert_amp
- ys_amp_replace_tag
- ys_amp_replace_oembed
- ys_amp_replace_sns
- ys_amp_replace_iframe
- ys_yscomment_wp_list_comments_callback
- ys_extras_comment_form_fields
- ys_extras_no_self_ping
- ys_extras_rss_the_post_thumbnail
- ys_extras_site_icon_meta_tags
- ys_utilities_get_apple_touch_icon_url
- ys_extras_document_title_separator
- ys_extras_iframe_responsive
- ys_extras_excerpt_length
- ys_extras_excerpt_more
- ys_extras_the_json_ld
- ys_template_the_post_paging
- ys_template_get_the_post_thumbnail

## 変更されたフィルタ

- ys_ga_tracking_id -> ys_get_google_anarytics_tracking_id
- ys_header_description -> ys_the_blog_description
- ys_get_front_page_template_part -> ys_get_front_page_template
- ys_advertisement_label_text -> ys_ad_label_text
- ys_user_avatar -> ys_get_author_avatar
- ys_get_the_convert_amp_img -> ys_amp_convert_image
- ys_convert_amp_before -> ys_amp_convert_before
- ys_entry_more_text -> ys_entry_read_more_text

## 削除されたフィルタ

- ys_ga_function
- ys_amp_ga_json
- ys_the_header_attr
- ys_the_content_attr
- ys_the_sidebar_attr
- ys_site_hero
- ys_entry_date_published
- ys_entry_date_update
- ys_post_hero
- ys_show_entry_foot_widget
- ys_advertisement_label_html
- ys_get_the_sns_share_buttons
- ys_get_the_amp_sns_share_buttons
- ys_get_the_sns_share
- ys_get_the_subscribe_buttons_list
- ys_get_the_subscribe_buttons_title
- ys_get_the_subscribe_buttons
- ys_the_entry_foot_cta
- ys_user_avatar
- ys_get_the_convert_amp_img
- ys_biography_template
- ys_the_footer_attr
- ys_convert_amp_before
- ys_the_post_paging_next_info

## 削除されたアクション

- ys_breadcrumb_prepend
- ys_breadcrumb_append
