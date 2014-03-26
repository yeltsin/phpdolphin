<?php
//======================================================================\\
// Author: Faruk İŞLEK                                                 \\
// Website: http://www.ofi.com.tr									   \\
// Email: farukislek@ofi.com.tr                                          \\
// Updated: 24/03/2014 [MM/DD/YYYY]                                     \\
// Language: Turkish                                                    \\
//======================================================================\\

// Character encoding
$LNG['charset'] = "iso-8859-1";

$LNG['user_success'] = 'Kullanıcı Oluşturuldu';
$LNG['user_exists'] = 'Aman! Bu Kullanıcı Adı Kullanılıyor.';
$LNG['email_exists'] = 'Bu eposta Başka Bir Kullanıcı Tarafından Kullanılıyor.';
$LNG['all_fields'] = 'Tüm boşluklar doldurulmalı!';
$LNG['user_alnum'] = 'Kullanıcı adı sadece sayı ve harflerden oluşabilir.';
$LNG['user_too_short'] = 'Kullanıcı adı 3 ile 32 karakter arasında olmalıdır.';
$LNG['invalid_email'] = 'Yanlış ePosta Formatı!';
$LNG['invalid_user_pw'] = 'Kullanıcı adı yada paroa Hatalı.';
$LNG['invalid_captcha'] = 'Doğrulama kodu yanlış';
$LNG['log_out'] = 'Çıkış';
$LNG['hello'] = 'Merhaba';
$LNG['visitor'] = 'Ziyaretçi';
$LNG['register'] = 'Kayıt';
$LNG['login'] = 'Giriş';
$LNG['password'] = 'Parola';
$LNG['username'] = 'Kullanıcı Adı';
$LNG['email'] = 'Eposta';
$LNG['captcha'] = 'Doğrulama Kodu';
$LNG['username_or_email'] = 'Kullanıcı adı ve parola';
$LNG['welcome_title'] = 'Hoşgeldiniz';
$LNG['welcome_desc'] = 'Burası Aliağanın Sosyal Paylaşım Platformu';
$LNG['welcome_about'] = 'anılarınızı paylaşın, diğerleri ile iletişime geçin, yeni arkadaşlar edinin.';
$LNG['forgot_password'] = 'Şifrenizi mi unuttunuz?';
$LNG['all_rights_reserved'] = 'Tüm Hakları saklıdır';

// NOTIFICATION BOXES //
$LNG['settings_saved'] = 'Ayarlar Kaydedildi';
$LNG['nothing_saved'] = 'Hiçbirşey Kaydedilmedi';
$LNG['general_settings_saved'] = 'Genel Ayarlar başarı ile kaydedildi.';
$LNG['overall_settings_saved'] = 'Ayarlarınız başarı ile güncellendi.';
$LNG['general_settings_unaffected'] = 'Herhangi bir değişiklik gözlenmedi.';
$LNG['password_changed'] = 'Parola Değişti';
$LNG['nothing_changed'] = 'Herhangi bir değişiklik gözlenmedi.';
$LNG['password_success_changed'] = 'Parolanız değiştirildi, artık yeni parolanızı kullanabilirsiniz.';
$LNG['incorrect_date'] = 'Seçtiğiniz tarih geçerli değil, Lütfen yenisini seçiniz.';
$LNG['password_not_changed'] = 'Parolanız değiştirlmedi.';
$LNG['image_saved'] = 'Görsel Kaydedildi';
$LNG['profile_picture_saved'] = 'Profil görseliniz kaydedildi.';
$LNG['error'] = 'Hata';
$LNG['no_file'] = 'Yüklemek için herhangi bir dosya seçmediniz, ya da seçtiğiniz dosyalar boş olabilir.';
$LNG['file_exceeded'] = 'Yüklemek istediğiniz dosya sitedeki izin verilen <strong>%s</strong> MB aşıyor';
$LNG['file_format'] = 'Bu dosya formatı site tarafından kullanılmıyor. Lütfen <strong>%s</strong> formatındaki dosyaları seçiniz';
$LNG['image_removed'] = 'Görsel Kaldırıldı';
$LNG['profile_picture_removed'] = 'Profil görseliniz kaldırıldı.';
$LNG['bio_description'] = 'Biografiniz %s karakter ya da daha az olmalıdır.';
$LNG['valid_email'] = 'Lütfen Geçerli bir Eposta yazınız.';
$LNG['valid_url'] = 'Lütfen geçerli bir URL formatı giriniz.';
$LNG['background_changed'] = 'Arka Plan başarı ile kaydedildi.';
$LNG['background_not_changed'] = 'Arka plan değiştirilmedi.';
$LNG['password_too_short'] = 'Parolanız en az <strong>3</strong> karakterden oluşmalı.';
$LNG['username_not_found'] = 'Böyle bir kullanıcı adı bulunamadı.';
$LNG['userkey_not_found'] = 'Kullanıcı adını ya da sıfırlama anahtarı yanlış , Lütfen bu bilgileri düzgün girdiğinizi kontrol ediniz.';
$LNG['password_reseted'] = 'Parolanız başarıyla sıfırlandı, Yeni bilgilerle giriş yapabilirsiniz.';
$LNG['email_sent'] = 'E-posta Gönderildi';
$LNG['email_reset'] = 'Size parolanızı sıfırlayabilmeniz için gerekli bilgileri içeren bir mail attık. En geç 24 saat içerisinde bu maili almanız gerekiyor, Ve ayrıca SPAM klasörlerinizide kontrol etmeyi untmayın.';
$LNG['user_deleted'] = 'Kullanıcı Silindi';
$LNG['user_has_been_deleted'] = 'Kullanıcı ID: <strong>%s</strong> silindi.';
$LNG['user_not_deleted'] = 'Seçtiğiniz kullanıcı(ID: %s) silinemez.';
$LNG['user_not_exist'] = 'Seçtiğiniz kullanıcı mevcut değil.';
$LNG['theme_changed'] = 'Tema değiştirildi';
$LNG['theme_success_changed'] = 'Tema başarıyla değiştirildi.';
$LNG['theme_not_changed'] = 'Afedersiniz tema değiştirilemez';
$LNG['notif_saved'] = 'Bildirimler Değiştirildi';
$LNG['notif_success_saved'] = 'Bildirimler başarıyla güncellendi.';

// MAIL CONTENT //
$LNG['welcome_mail'] = '%s hoşgeldiniz';
$LNG['user_created'] = 'Bize katıldığın için memnun olduk <strong>%s</strong><br /><br />Kullanıcı Adın: <strong>%s</strong><br />Parolan: <strong>%s</strong><br /><br />Şimdi buradan sisteme giriş yapablirsin: <a href="%s" target="_blank">%s</a>';
$LNG['recover_mail'] = 'Parolam Sıfırlama';
$LNG['recover_content'] = 'Parolama sıfırlamak istendi, eğer sizin yaptığınız bir istek değilse bu maili gözadrı edin. <br /><br />Kullanıcı Adı: <strong>%s</strong><br />Sıfırlama Anahtarı: <strong>%s</strong><br /><br />Şimdi direk vereceğimiz linke tıklayarak şifreni sıfırlayabilirsin: <a href="%s/index.php?a=recover&r=1" target="_blank">%s/index.php?a=recover&r=1</a>';
$LNG['ttl_comment_email'] = '%s paylaşımına yorum yaptı';
$LNG['comment_email'] = 'Merhaba <strong>%s</strong>,<br /><br /><strong><a href="%s">%s</a></strong> paylaşımına <strong><a href="%s">yorum yaptı.</a></strong>
<br /><br /><span style="color: #aaa;">Bu mesaj otomatik gönderildi, bu tür bildirimler almak istemiyorsan <strong>%s</strong> lütfen burayı tıkla<a href="%s">BİLDİRME</a>.</span>';
$LNG['ttl_like_email'] = '%s paylaşımını beğendi';
$LNG['like_email'] = 'Merhaba <strong>%s</strong>,<br /><br /><strong><a href="%s">%s</a></strong> senin mesajını <strong><a href="%s">beğendi.</a></strong>
<br /><br /><span style="color: #aaa;">Bu mesaj otomatik gönderildi, bu tür epostalar almak istemiyorsan<strong>%s</strong> lütfen burayı tıkla<a href="%s">BİLDİRME</a>.</span>';
$LNG['ttl_new_friend_email'] = '%s seni arkadaşı olarak ekledi';
$LNG['new_friend_email'] = 'Merhaba <strong>%s</strong>,<br /><br /><strong><a href="%s">%s</a></strong> seni arkadaşı olarak ekledi.
<<br /><br /><span style="color: #aaa;">Bu mesaj otomatik gönderildi, bu tür epostalar almak istemiyorsan <strong>%s</strong> buradaki linki tıkla <a href="%s">BİLDİRME</a>.</span>';

// ADMIN PANEL //

$LNG['general_link'] = 'Genel';
$LNG['security_link'] = 'Güvenlik';
$LNG['manage_users'] = 'Kullanıcı Yönetimi';

$LNG['theme_install'] = 'Yeni temaları <strong>themes</strong> klasörüne yükleyin.';
$LNG['theme_author_homepage'] = 'Sayfa sahibini ziyaret edin';
$LNG['theme_version'] = 'Versiyon';
$LNG['theme_active'] = 'Aktif';
$LNG['theme_activate'] = 'Aktif Et';
$LNG['theme_by'] = 'tarafından';

// FEED //
$LNG['welcome_feed_ttl'] = 'Zaman Akışına Hoşgeldin';
$LNG['welcome_feed'] = 'Arkadaşlarının paylaşımlarını buradan takip edeceksin, ama önce biraz arkadaş edinelim.';
$LNG['welcome_timeline_ttl'] = 'Kendi Zaman akışına hoşgeldin';
$LNG['welcome_timeline'] = 'Kend paylaştığın herşeyi bu sayfada göreceksin, haydi birşeyler paylaş.';
$LNG['leave_comment'] = 'Yorum yaz...';
$LNG['post'] = 'Paylaş';
$LNG['view_more_comments'] = 'Daha fazla yorum gör';
$LNG['this_post_private'] = 'Bu mesaj ÖZEL';
$LNG['this_post_public'] = 'Bu mesaj HERKESE AÇIK';
$LNG['delete_this_comment'] = 'Bu yorumu Sil';
$LNG['delete_this_message'] = 'Bu mesajı Sil';
$LNG['report_this_message'] = 'Bu mesajı Şikayet Et';
$LNG['report_this_comment'] = 'Bu Yorumu Şikayet Et';
$LNG['view_more_messages'] = 'Daha Fazla Yükle';
$LNG['food'] = ' <strong>%s</strong> yiyorum';
$LNG['visited'] = '<strong>%s</strong> da geziyorum';
$LNG['played'] = '<strong>%s</strong> oynuyorum';
$LNG['watched'] = '<strong>%s</strong> izliyorum';
$LNG['listened'] = '<strong>%s</strong> dinliyorum';
$LNG['shared'] = 'Şimdi yeni bir <a href="%s"><strong>gönderiyi</strong></a> paylaştım Kimden: <a href="%s"><strong>%s</strong></a>.';
$LNG['form_title'] = 'Durumunu Güncelle';
$LNG['comment_wrong'] = 'Birşeyler yanlış gitti, lütfen sayfayı yenileyin ve tekrar deneyin.';
$LNG['comment_too_long'] = 'Afedersin, ama bir paylaşımda izin verilen maksimum karakter sayısı<strong>%s</strong>.';
$LNG['comment_error'] = 'Afedersin, yorumunu paylaşamadık, lütfen sayfayı yenileyip tekrar deneyin.';
$LNG['message_hidden'] = 'Afedersiniz, ama bu mesaj özel, sadece sahibi görebilir.';
$LNG['message_hidden_ttl'] = 'Özel Mesaj';
$LNG['login_to_lcs'] = 'Beğenmek, yorum yapmak ve paylaşmak için Lütfen Giriş Yapınız';
$LNG['comment'] = 'Yorum';
$LNG['share'] = 'Paylaş';
$LNG['shared_success'] = 'Gönderi başarı ile senin <a href="%s"><strong>Zaman Akışına</strong></a> eklendi.';
$LNG['no_shared'] = 'Afedersin, mesajını ekleyemedik,Lütfen sayfayı yenileyip tekrar deneyiniz';
$LNG['share_title'] = 'Bunu paylaş';
$LNG['share_desc'] = 'Bu mesajı kendi Zaman Akışında paylaşmaya emin misin?';
$LNG['cancel'] = 'İptal';
$LNG['close'] = 'Kapat';

// REPORT //
$LNG['1_not_exists'] = 'Rapor edilen mesaj mevcut değil.';
$LNG['0_not_exists'] = 'Rapor edilen yorum mevcut değil.';
$LNG['1_already_reported'] = 'Bu mesaj yakın zamanda Şikayet edildi ve en kısa zamanda incelenecek, teşekkürler.';
$LNG['0_already_reported'] = 'Bu yorum yakın zamanda Şikayet edildi ve en kısa zamanda incelenecek, teşekkürler..';
$LNG['1_is_safe'] = 'Bu mesaj yönetici tarafından <strong>güvenli</strong> olarak işaretlendi, iletişimde bulunduğunuz için teşekkürler.';
$LNG['0_is_safe'] = 'Bu yorum yönetici tarafından <strong>güvenli</strong> olarak işaretlendi, iletişimde bulunduğunuz için teşekkürler.';
$LNG['1_report_added'] = 'Mesaj şikayetin iletildi ve en kısa zamanda incelenecek, Bizimle iletişim halinde bulunduğunuz için teekkürler.';
$LNG['0_report_added'] = 'Yorum şikayetin iletildi ve en kısa zamanda incelenecek, Bizimle iletişim halinde bulunduğunuz için teekkürler.';
$LNG['1_report_error'] = 'Mesaj raporlanırken bir hata oluştu, lütfen sayfayı yenileyip tekrar deneyiniz.';
$LNG['0_report_error'] = 'Yorum raporlanırken bir hata oluştu, lütfen sayfayı yenileyip tekrar deneyiniz.';
$LNG['1_is_deleted'] = 'Mesaj siteden kaldırıldı, bizimle iletişim halinde olduğunuz için teşekkürler.';
$LNG['0_is_deleted'] = 'Yorum siteden kaldırıldı, bizimle iletişim halinde olduğunuz için teşekkürler.';

// SIDEBAR //
$LNG['filter_events'] = 'Olayları Filitrele';
$LNG['archive'] = 'Arşivler';
$LNG['all_events'] = 'Tüm Etkinlikler';
$LNG['sidebar_map'] = 'Mekanlar';
$LNG['sidebar_food'] = 'Yeme İçme';
$LNG['sidebar_visited'] = 'Geziler';
$LNG['sidebar_movie'] = 'Filmler';
$LNG['sidebar_game'] = 'Oyunlar';
$LNG['sidebar_picture'] = 'Fotoğraflar';
$LNG['sidebar_video'] = 'Videolar';
$LNG['sidebar_music'] = 'Müzikler';
$LNG['sidebar_shared'] = 'Paylaşımlar';
$LNG['all_time'] = 'Tüm Zamanlar';
$LNG['subscriptions'] = 'Arkadaşlar';
$LNG['subscribers'] = 'Aboneler';
$LNG['welcome'] = 'Merhaba';
$LNG['filter_gender'] = 'Cinsiyet Filitresi';
$LNG['sidebar_male'] = 'Erkek';
$LNG['sidebar_female'] = 'Kadın';
$LNG['all_genders'] = 'Tüm Cinsiyetler';
$LNG['online_friends'] = 'Online Arkadaşlar';
$LNG['sidebar_likes'] = 'Beğeniler';
$LNG['sidebar_comments'] = 'Yorumlar';
$LNG['sidebar_friendships'] = 'Arkadaşlıklar';
$LNG['sidebar_chats'] = 'Mesajlar';
$LNG['sidebar_suggestions'] = 'Arkadaş Önerileri';
$LNG['sidebar_trending'] = 'Popüler Konular';
$LNG['sidebar_friends_activity'] = 'Arkadaş Etkinlikleri';

// MESSAGES / CHAT //
$LNG['lonely_here'] = 'It\'s lonely here, how about making some friends?';
$LNG['write_message'] = 'Mesaj yaz...';
$LNG['chat_too_long'] = 'Afedersiniz, bir mesajda izin verilen maksimum karakter sayısı<strong>%s</strong>.';
$LNG['blocked_by'] = 'Mesajın gönderilemedi. <strong>%s</strong> seni engellemiş.';
$LNG['blocked_user'] = 'Mesajın gönderilemedi. Sen engellenmişsin<strong>%s</strong>.';
$LNG['chat_self'] = 'Üzgünüm ama size chat mesajlarını iletemiyoruz.';
$LNG['chat_no_user'] = 'Mesajlaşmak için bir kullanıcı seçin.';
$LNG['view_more_conversations'] = 'Daha fazla konuşma görüntüle';
$LNG['block'] = 'Engelle';
$LNG['unblock'] = 'Engeli Kaldır';
$LNG['conversation'] = 'Sohbet';
$LNG['start_conversation'] = 'Arkadaş listende olmayan birisi ile sohbet başlatamazsın.';
$LNG['send_message'] = 'Mesaj gönder';

// MESSAGE FORM //
$LNG['label_food'] = 'Nerede yediğini ekle';
$LNG['label_game'] = 'Oynadığın oyunu ekle';
$LNG['label_movie'] = 'İzlediğin filmi ekle';
$LNG['label_visited'] = 'Gezdiğin mekanı ekle';
$LNG['label_map'] = 'Yer ekle';
$LNG['label_video'] = 'YouTube veya Vimeo linkini direk buraya yapıştır';
$LNG['label_music'] = 'SoundCloud linkini buraya yapıştır';
$LNG['label_image'] = 'Görsel(ler) yükle';
$LNG['message_form'] = 'Ne düşünüyorsun?';
$LNG['file_too_big'] = 'Seçtiğin dosya çok büyük(%s) , izin verilen maksimum dosya boyutu <strong>%s</strong>.';
$LNG['format_not_exist'] = 'Seçtiğin dosya formatı (%s) geçersiz, lütfen sadece <strong>%s</strong> görsel formatlarını kullan.';
$LNG['privacy_no_exist'] = 'The selected privacy does not exist, please refresh the page and try again.';
$LNG['event_not_exist'] = 'Seçtiğin etkinlik açkık değil, lütfen sayfayı yenileyip tekrar dene.';

$LNG['unexpected_message'] = 'Beklenmedik bir hata oluştu , lütfen sayfayı yenileyip tekrar dene.';
$LNG['message_too_long'] = 'Afedersin , ama bir mesajda izin verilen maksimum karakter sayısı<strong>%s</strong>.';
$LNG['files_selected'] = 'görsel(ler) seçildi.';
$LNG['too_many_images'] = 'Bir mesajda izin verilen maksimum görsel sayısı <strong>%s</strong>, sen <strong>%s</strong> görsel yüklemeye çalışıyorsun.';

// USER PANEL //
$LNG['user_menu_general'] = 'Genel';
$LNG['user_menu_security'] = 'Parola';
$LNG['user_menu_avatar'] = 'Profil';
$LNG['user_menu_notifications'] = 'Bildirimler';

$LNG['user_ttl_general'] = 'Genel Ayarlar';
$LNG['user_ttl_security'] = 'Parola Ayarları';
$LNG['user_ttl_avatar'] = 'Profil Ayarları';
$LNG['user_ttl_notifications'] = 'Bildirim Ayarları';

$LNG['user_desc_general'] = 'Hesabı , gizliliği, yer bilgisi ayarlarını değiştir.';
$LNG['user_desc_security'] = 'Parolanı buradan değiştirebilirsin.';
$LNG['user_desc_avatar'] = 'Profil fotoğrafını buradan değiştirebilirsin.';
$LNG['user_desc_cover'] = 'Kapak fotoğrafını buradan değiştirebilirsin.(900x200 Piksel)';
$LNG['user_desc_notifications'] = 'Bildirim Ayarlarını burada düzenleyebilirsin.';

$LNG['ttl_background'] = 'Arkaplanlar';
$LNG['sub_background'] = 'Profiliniz için bir arkaplan seçin';

$LNG['ttl_first_name'] = 'Adın';
$LNG['sub_first_name'] = 'Lütfen adınızı giriniz';

$LNG['ttl_last_name'] = 'Soyadın';
$LNG['sub_last_name'] = 'Lütfen soyadınızı girin';

$LNG['ttl_email'] = 'Eposta';
$LNG['sub_email'] = 'E-postan kimseye gösterilmeyecek';

$LNG['ttl_location'] = 'Yer';
$LNG['sub_location'] = 'Nerede Yaşıyorsun?';

$LNG['ttl_website'] = 'Website';
$LNG['sub_website'] = 'Kendinize ait bir blog ya da websiteniz varsa belirtebilirsiniz';

$LNG['ttl_gender'] = 'Cinsiyet';
$LNG['sub_gender'] = 'Cinsiyetini seç (Erkek ya da Kadın)';

$LNG['ttl_profile'] = 'Profil';
$LNG['sub_profile'] = 'Profil Gizliliği';

$LNG['ttl_messages'] = 'Paylaşım Gizliliği';
$LNG['sub_messages'] = 'Paylaştıklarınızı kimler görebilir.';

$LNG['ttl_offline'] = 'Sohbet Durumu';
$LNG['sub_offline'] = 'Sohbet için durumunuzu belirtir';

$LNG['ttl_facebook'] = 'Facebook';
$LNG['sub_facebook'] = 'Facebook IDniz.';

$LNG['ttl_twitter'] = 'Twitter';
$LNG['sub_twitter'] = 'Twitter IDniz.';

$LNG['ttl_google'] = 'Google+';
$LNG['sub_google'] = 'Google+ IDniz.';

$LNG['ttl_bio'] = 'Biografiniz';
$LNG['sub_bio'] = 'Hakkınızda bilinmesi gerekenler(maksimum 160 karakter)';

$LNG['ttl_born'] = 'Doğum Tarihiniz';
$LNG['sub_born'] = 'Ne zaman doğdunuz?';

$LNG['ttl_not_verified'] = 'Kontrol edilmedi';
$LNG['ttl_verified'] = 'Kontrol edildi';
$LNG['sub_verified'] = 'Doğrulanmış kullanıcı profili';

$LNG['ttl_upload_avatar'] = 'Seçili profil fotoğrafını yükle';
$LNG['ttl_delete_avatar'] = 'Geçerli profil fotoğrafını sil';

$LNG['opt_public'] = 'Herkese Açık';
$LNG['opt_private'] = 'Özel';
$LNG['opt_semi_private'] = 'Sadece izin verilmiş kişiler';

$LNG['opt_offline_off'] = 'Online (sistemdeyken)';
$LNG['opt_offline_on'] = 'Her zaman Offline';

$LNG['no_gender'] = 'Belirtilmemiş Cinsiyet';
$LNG['male'] = 'Erkek';
$LNG['female'] = 'Kadın';

$LNG['ttl_upload'] = 'Yükle';
$LNG['ttl_password'] = 'Parola';
$LNG['sub_password'] = 'Yeni Parolanızı girin(3 karakterden fazla olmalı)';
$LNG['save_changes'] = 'Değişiklikleri Kaydet';
$LNG['ttl_upload_photo'] = 'Profil Fotoğrafı Yükle';
$LNG['ttl_upload_cover'] = 'Kapak Fotoğrafı Yükle';
$LNG['ttl_delete_photo'] = 'Fotoğrafı Sil';

$LNG['ttl_notificationl'] = 'Beğeni Bildirimi';
$LNG['sub_notificationl'] = 'Paylaşımlar <strong>beğenildiğinde</strong> size uyarı verilsin mi?';

$LNG['ttl_notificationc'] = 'Yorum Bildirimi';
$LNG['sub_notificationc'] = '<strong>Yorum</strong> yapıldığında size bilgi verilsin mi?';

$LNG['ttl_notifications'] = 'Mesaj Bildirimi';
$LNG['sub_notifications'] = '<strong>Mesaj Paylaşıldığında</strong> size bilgi verilsin mi?';

$LNG['ttl_notificationd'] = 'Sohbet Bildirimi';
$LNG['sub_notificationd'] = '<strong>Sohbet</strong> uyarısı olduğunda size bilgi Verilsin mi?';

$LNG['ttl_notificationf'] = 'Arkadaşlık İstekleri';
$LNG['sub_notificationf'] = '<strong>Arkadaşlık</strong> isteği gönderilince size uyarı verilsin mi?';

$LNG['ttl_sound_nn'] = 'Sesli Uyarı';
$LNG['sub_sound_nn'] = 'Herhangi bir bildiri gelince sesli bir uyarı tonu çalar.';

$LNG['ttl_sound_nc'] = 'Sohbet Sesli Bildirimi';
$LNG['sub_sound_nc'] = 'Yeni sohbet başlatılırsa ses çalsın mı?';

$LNG['ttl_email_comment'] = 'Yorumların Eposta Uyarısı';
$LNG['sub_email_comment'] = 'Paylaşımlarına yorum yapılınca size mail gönderelim mi?';

$LNG['ttl_email_like'] = 'Beğeni Eposta Uyarısı';
$LNG['sub_email_like'] = 'Paylaştığınız birşey beğenilince size eposta gönderelim mi?';

$LNG['ttl_email_new_friend'] = 'Arkadaş EPosta Uyarısı';
$LNG['sub_email_new_friend'] = 'Szi arkadaş olarak ekledikleirnde eposta gönderelim mi?';

$LNG['user_ttl_sidebar'] = 'Ayarlar';

// ADMIN PANEL //
$LNG['admin_login'] = 'Yönetici Girişi';
$LNG['admin_user_name'] = 'Kullanıcı Adı';
$LNG['desc_admin_user'] = 'Yönetici kullanıcı adınızı girin';
$LNG['admin_pass'] = 'Parola';
$LNG['desc_admin_pass'] = 'Yönetici Parolanızı Girin';
$LNG['admin_menu_general'] = 'Genel Ayarlar';
$LNG['admin_menu_security'] = 'Parola';
$LNG['admin_menu_users'] = 'Kullanıcı Yönetimi';
$LNG['admin_menu_logout'] = 'Çıkış';
$LNG['admin_menu_stats'] = 'İstatistikler';
$LNG['admin_menu_users_settings'] = 'Kullanıcı Ayarları';
$LNG['admin_menu_themes'] = 'Temalar';
$LNG['admin_menu_manage_reports'] = 'Rapor Yönetimi';
$LNG['admin_menu_manage_ads'] = 'Reklam Yönetimi';

$LNG['admin_ttl_sidebar'] = 'Menü';
$LNG['admin_ttl_general'] = 'Genel Ayarlar';
$LNG['admin_ttl_security'] = 'Parola Ayarları';
$LNG['admin_ttl_themes'] = 'Temalar';
$LNG['admin_ttl_users'] = 'Kullanıcı Yönetimi';
$LNG['admin_ttl_stats'] = 'İstatistikler';
$LNG['admin_ttl_users_settings'] = 'Kullanıcı Ayarları';
$LNG['admin_ttl_manage_reports'] = 'Rapor Ayarları';
$LNG['admin_ttl_manage_ads'] = 'Reklam Ayarları';

$LNG['admin_desc_general'] = 'Sitenin genel ayarlarını değiştir.';
$LNG['admin_desc_users_settings'] = 'Kullanıcıların genel ayarlarını değiştir.';
$LNG['admin_desc_themes']  = 'Sitenin arayüzünü değiştir.';
$LNG['admin_desc_security'] = 'Yönetici Parolasını değiştir.';
$LNG['admin_desc_users'] = 'Kayıtlı kullanıcıları yönet.';
$LNG['admin_desc_stats'] = 'Kullanıcı ve site istatistikleri';
$LNG['admin_desc_edit_users'] = 'Kullanıcı ayarlarını düzenle';
$LNG['admin_desc_manage_reports'] = 'Şikayetleri incele.';
$LNG['admin_desc_manage_ads'] = 'Sitenin Reklam bölümlerini incele.';

$LNG['admin_ttl_title'] = 'Başlık';
$LNG['admin_sub_title'] = 'Sitenin başlığı';

$LNG['admin_ttl_captcha'] = 'Doğrulama Kodu';
$LNG['admin_sub_captcha'] = 'Chaptcha Doğrulama kodunu aç';

$LNG['admin_ttl_timestamp'] = 'Zaman Damgası';
$LNG['admin_sub_timestamp'] = 'Paylaşımların, mesajlarınve yorumların tarih biçimi';

$LNG['admin_ttl_msg_perpage'] = 'Paylaşımlar';
$LNG['admin_sub_msg_perpage'] = 'Birsayfadaki paylaşım sayısı';

$LNG['admin_ttl_com_perpage'] = 'Yorumlar';
$LNG['admin_sub_com_perpage'] = 'Bir sayfadaki yorum sayısı';

$LNG['admin_ttl_chat_perpage'] = 'Sohbet';
$LNG['admin_sub_chat_perpage'] = 'Bir sayfadaki sohbet sayısı';

$LNG['admin_ttl_smiles'] = 'İfadeler';
$LNG['admin_sub_smiles'] = ':) :P gibi kodları ifadelere çevirmek';

$LNG['admin_ttl_nperpage'] = 'Bildirimler';
$LNG['admin_sub_nperpage'] = 'Kaç adet bildirim gösterilecek (Bildirimler Sayfasında)';

$LNG['admin_ttl_qperpage'] = 'Arama';
$LNG['admin_sub_qperpage'] = 'Birsayfadaki arama sonucu sayısı(Arama sayfasında)';

$LNG['admin_ttl_msg_limit'] = 'Paylaşım Karakter Limiti';
$LNG['admin_sub_msg_limit'] = 'Bir paylaşımdaki maksimum karakter sayısı';

$LNG['admin_ttl_chat_limit'] = 'Sohbet Karakter Limiti';
$LNG['admin_sub_chat_limit'] = 'Bir özel mesajdaki maksimum karakter sayısı';

$LNG['admin_ttl_email_user'] = 'Kayıtta Eposta';
$LNG['admin_sub_email_user'] = 'Kayıt Sonrası Eposta Gönder';

$LNG['admin_ttl_notificationsm'] = 'Paylaşım Bildirimleri';
$LNG['admin_sub_notificationsm'] = 'Yeni paylaşımların bildirimlerinin güncellenme aralığı';

$LNG['admin_ttl_notificationsn'] = 'Olay Bildirimleri';
$LNG['admin_sub_notificationsn'] = 'Yeni olayların bildirimlerinin güncellenme aralığı';

$LNG['admin_ttl_chatrefresh'] = 'Sohbet Güncelleme Aralığı';
$LNG['admin_sub_chatrefresh'] = 'Yeni sohbet mesajlarının güncellenme aralığı';

$LNG['admin_ttl_timeonline'] = 'Online Kabul Süresi';
$LNG['admin_sub_timeonline'] = 'Kullanıcıların aktivite sürelerine göre online durumu bildirimi';

$LNG['admin_ttl_image_profile'] = 'Görsel Boyutları (Profil)';
$LNG['admin_sub_image_profile'] = 'Profil ve kapak fotoğrafları için izin verilen maksimum büyüklük';

$LNG['admin_ttl_image_format'] = 'Görsel Formatı (Profil)';
$LNG['admin_sub_image_format'] = 'Profil ve kapak fotoğrafları için izin verilen dosya formatları, sadece gif,png,jpg vb formatlarını kullanınız';

$LNG['admin_ttl_message_image'] = 'Görsel Büyüklüğü (Gönderi)';
$LNG['admin_sub_message_image'] = 'Gönderilerde kullanılabiliecek maksimum görsel büyüklüğü';

$LNG['admin_ttl_message_format'] = 'Görsel Formatı (Gönderiler)';
$LNG['admin_sub_message_format'] = 'Gönderilerdeki görseller için izin verilen dosya formatları, sadece gif,png,jpg vb formatlarını kullanınız';

$LNG['admin_ttl_censor'] = 'Sansür';
$LNG['admin_sub_censor'] = 'Yasaklı kelimeler(Kelime aralarına ekleyiniz \',\' [comma])';

$LNG['admin_ttl_ad1'] = 'Reklam Bölümü 1';
$LNG['admin_sub_ad1'] = 'Hoşgeldiniz sayfası Altında';

$LNG['admin_ttl_ad2'] = 'Reklam Bölümü 2';
$LNG['admin_sub_ad2'] = 'Reklam Bölümü 2 (Zaman Akışı Sütununda)';

$LNG['admin_ttl_ad3'] = 'Reklam Bölümü 3';
$LNG['admin_sub_ad3'] = 'Reklam Bölümü 3 (Haberler Sütununda)';

$LNG['admin_ttl_ad4'] = 'Reklam Bölümü 4';
$LNG['admin_sub_ad4'] = 'Reklam Bölümü 4 (Profil Sayfasında Sütununda)';

$LNG['admin_ttl_ad5'] = 'Reklam Bölümü 5';
$LNG['admin_sub_ad5'] = 'Reklam Bölümü 5 (Özel Mesajlar Sütununda)';

$LNG['admin_ttl_ad6'] = 'Reklam Bölümü 6';
$LNG['admin_sub_ad6'] = 'Reklam Bölümü 6 (Arkadaş Arama Ekranı Sütununda)';

$LNG['admin_ttl_password'] = 'Parola';
$LNG['admin_sub_password'] = 'Değiştirmekten vazgeçtiyseniz boş bırakın';

$LNG['admin_ttl_edit'] = 'Düzenle';
$LNG['admin_ttl_edit_profile'] = 'Profili Düzenle';

$LNG['admin_ttl_delete'] = 'Sil';
$LNG['admin_ttl_delete_profile'] = 'Profili Sil';

$LNG['admin_ttl_mail'] = 'Email';
$LNG['admin_ttl_username'] = 'Kullanıcı Adı';
$LNG['admin_ttl_id'] = 'ID'; // As in user ID

$LNG['admin_ttl_mprivacy'] = 'Mesaj Tipi';
$LNG['admin_sub_mprivacy'] = 'Genel olarak kullanıcıların paylaşımlarının gizliliği (Bu seçeneği Kulanılar kendi gizlilik ayarından değiştirebilir)';

$LNG['admin_ttl_notificationl'] = 'Beğeni Bildirimleri';
$LNG['admin_sub_notificationl'] = '<strong>Beğeni</strong> gelince bildirilsin mi? (Bu seçeneği Kulanılar kendi gizlilik ayarından değiştirebilir)';

$LNG['admin_ttl_notificationc'] = 'Yorum Bildirimleri';
$LNG['admin_sub_notificationc'] = '<strong>Yorum</strong> yapıldığında bildirilsin mi? (Bu seçeneği Kulanılar kendi gizlilik ayarından değiştirebilir)';

$LNG['admin_ttl_notifications'] = 'Gönderi Bildirimi';
$LNG['admin_sub_notifications'] = '<strong>Gönderi</strong> paylaşımlarında bildirilsin mi?(Bu seçeneği Kulanılar kendi gizlilik ayarından değiştirebilir)';

$LNG['admin_ttl_notificationd'] = 'Özel Mesaj Bildirimleri';
$LNG['admin_sub_notificationd'] = '<strong>Özel Mesaj</strong> alındığında bildirilsin mi? (Bu seçeneği Kulanılar kendi gizlilik ayarından değiştirebilir)';

$LNG['admin_ttl_notificationf'] = 'Arkadaşlık Bildirimleri';
$LNG['admin_sub_notificationf'] = '<strong>Arkadaş Eklendiğinde</strong> bildirilsin mi? (Bu seçeneği Kulanılar kendi gizlilik ayarından değiştirebilir)';

$LNG['admin_ttl_sound_nn'] = 'Sesli Bildirim';
$LNG['admin_sub_sound_nn'] = 'Herhangi bir bildirim olduğunda uyarı sesi çalınsın mı? (Bu seçeneği Kulanılar kendi gizlilik ayarından değiştirebilir)';

$LNG['admin_ttl_sound_nc'] = 'Özel Mesaj Sesi';
$LNG['admin_sub_sound_nc'] = 'Özel mesajlarda cevap alındığında ses çalınsın mı? (Bu seçeneği Kulanılar kendi gizlilik ayarından değiştirebilir)';

$LNG['admin_ttl_email_comment'] = 'Yorumları Eposta ile Bildir';
$LNG['admin_sub_email_comment'] = 'Yorum yapıldığında Eposta yoluyla bildirim sağlar';

$LNG['admin_ttl_email_like'] = 'Beğenileri Epostala';
$LNG['admin_sub_email_like'] = 'Gönderiler beğeni alınca eposta ile uyar';

$LNG['admin_ttl_email_new_friend'] = 'Yeni Arkadaşlık Eposta Bildirimi';
$LNG['admin_sub_email_new_friend'] = 'Yeni Arkadaş eklenince Eposta yoluyla bildir';

$LNG['admin_ttl_ilimit'] = 'Gönderi Görsel Sayısı';
$LNG['admin_sub_ilimit'] = 'Bir gönderideki maksimum görsel sayısı';

$LNG['admin_ttl_wholiked'] = 'Kimler Beğedi';
$LNG['admin_sub_wholiked'] = 'Gönderiyi beğenenlerin sayısının kaç tanesi isimle gösterilecek';

$LNG['admin_ttl_rperpage'] = 'Şikayetler';
$LNG['admin_sub_rperpage'] = 'Bir sayfada yüklenecek Şikayet sayısı';

$LNG['admin_ttl_sperpage'] = 'Arkadaşlar';
$LNG['admin_sub_sperpage'] = 'Bir sayfada gösterilecek arkadaş sayısı (profil sayfasında)';

$LNG['admin_ttl_ronline'] = 'Online Arkadaşlar';
$LNG['admin_sub_ronline'] = 'Sağ sütunda gsterilecek Sistemdeki Arkadaş Sayısı.';

$LNG['admin_ttl_nperwidget'] = 'Aşağı Açılan Menü Bildirimleri';
$LNG['admin_sub_nperwidget'] = 'Kategorilerine göre Bildirim Sayısı(Beğeniler, Yorumlar, Gönderiler)';

$LNG['admin_ttl_uperpage'] = 'Kullanıcılar';
$LNG['admin_sub_uperpage'] = 'Bir sayfada gösterilecek kullanıcı sayısı (Yöneticilerin Kullanıcı Yönetimi Sayfasında)';

$LNG['admin_sub_verified'] = 'Açılan Her Kullanıcı Doğrulanmış Kullanıcı mıdır? (Bunu Tavsiye Etmiyoruz)';

$LNG['per_page'] = '/ sayfa';
$LNG['second'] = 'saniye';
$LNG['seconds'] = 'saniye';
$LNG['minute'] = 'dakika';
$LNG['minutes'] = 'dakika';
$LNG['hour'] = 'saat';
$LNG['recommended'] = 'tavsiye edildi';
$LNG['edit_user'] = 'Kullanıcı Düzenle';
$LNG['username_to_edit'] = 'Kullanıcı adı giriniz';
$LNG['username_to_edit_sub'] = 'Düzenlemek istediğiniz kullanıcı adını yazınız';

// STATS //
$LNG['user_registration'] = 'Kullanıcı Kaydı';
$LNG['users_today'] = 'Bugün';
$LNG['users_this_month'] = 'Bu Ay';
$LNG['users_last_30'] = 'Son 30';
$LNG['total_users'] = 'Toplam';

$LNG['messages'] = 'Paylaşımlar';
$LNG['comments'] = 'Yorumlar';
$LNG['messages_and_comments'] = 'Paylaşımlar & Yorumlar';
$LNG['reports_title'] = 'Şikayetler- (Paylaşımlar %26 Yorumlar)';
$LNG['total_messages'] = 'Toplam Paylaşımlar';
$LNG['public_messages'] = 'Herkese Açık Paylaşımlar';
$LNG['private_messages'] = 'Özel Paylaşımlar';
$LNG['total_comments'] = 'Toplam Yorumlar';
$LNG['stats_total'] = 'Toplam';
$LNG['stats_public'] = 'Herkese Açık';
$LNG['stats_private'] = 'Özel';
$LNG['stats_reports'] = 'Şikayetler';
$LNG['total_reports'] = 'Toplam Şikayetler';
$LNG['pending_reports'] = 'Bekleyen Şikayetler';
$LNG['safe_reports'] = 'Güvenli Şikayetler';
$LNG['deleted_reports'] = 'Silinen Şikayetler';
$LNG['likes_today'] = 'Bugünki beğeniler';
$LNG['likes_this_month'] = 'Bu ayki beğeniler';
$LNG['likes_last_30'] = 'Son 30';
$LNG['likes_total'] = 'Toplam Beğeni';
$LNG['likes'] = 'Beğeni';

// MANAGE REPORTS //
$LNG['admin_reports_id'] = 'ID';
$LNG['admin_reports_view'] = 'Raporu Görüntüle';
$LNG['admin_reports_type'] = 'Tip';
$LNG['admin_reports_by'] = 'Şikayet Eden';
$LNG['admin_reports_safe'] = 'Güvenli Olarak İşaretle';
$LNG['admin_reports_delete'] = 'Sil';
$LNG['admin_reports_ttl_safe'] = 'Güvenli Olarak İşaretle';

// LIKES //
$LNG['already_liked'] = 'Bu paylaşımı zaten beğenmiştiniz.';
$LNG['already_disliked'] = 'Bu paylaşımı zaten Beğenmekten Vazgeçtiniz.';
$LNG['like'] = 'Beğen';
$LNG['dislike'] = 'Beğenmekten Vazgeç';
$LNG['like_message_not_exist'] = 'Böyle bir paylaşım artık yok.Silinmiş olabilir.';
$LNG['liked_this'] = 'bunu beğendi';
$LNG['x_liked_y_post'] = ' %1$s\'ın <a href="%2$s"><strong>gönderisini</strong></a> beğendi';

// MISC //
$LNG['sponsored'] = 'Sponsorlu';
$LNG['censored'] = '<strong>sansürlü</strong>';
$LNG['new_like_notification'] = '<strong><a href="%s">%s</a></strong> senin bir <strong><a href="%s">gönderini</a></strong> beğendi';
$LNG['new_comment_notification'] = '<strong><a href="%s">%s</a></strong> <strong><a href="%s">senin gönderine</a></strong> yorum yaptı';
$LNG['new_shared_notification'] = '<strong><a href="%s">%s</a></strong> <strong><a href="%s">senin gönderini</a></strong> paylaştı ';
$LNG['new_friend_notification'] = '<strong><a href="%s">%s</a></strong> seni arkadaş olarak ekledi';
$LNG['new_chat_notification'] = '<strong><a href="%s">%s</a></strong> sana bir <strong><a href="%s">sohbet mesajı</a></strong> gönderdi';
$LNG['new_like_fa'] = '<strong><a href="%s">%s</a></strong> senin bir <strong><a href="%s">gönderini</a></strong> beğendi';
$LNG['new_comment_fa'] = '<strong><a href="%s">%s</a></strong> senin bir <strong><a href="%s">gönderine</a></strong> yorum yaptı';
$LNG['new_message_fa'] = '<strong><a href="%s">%s</a></strong> yeni bir <strong><a href="%s">gönderi</a></strong> yaptı';
$LNG['change_password'] = 'Parola Değiştir';
$LNG['enter_new_password'] = 'Yeni parolanızı girin';
$LNG['enter_reset_key'] = 'Sıfırlama Anahtarınızı yazın';
$LNG['enter_username'] = 'Kullanıcı Adınızı Girin';
$LNG['reset_key'] = 'Sıfırlama Anahtarı';
$LNG['new_password'] = 'Yeni Parola';
$LNG['password_recovery'] = 'Parola Kurtarma';
$LNG['recover']	= 'Kurtar';
$LNG['recover_sub_username'] = 'Parolamasını sıfırlamak istediğiniz kullanıcı adınızı yazın';

// PROFILE //
$LNG['profile_not_exist'] = 'Afedersiniz, ama böyle bir profil yok.';
$LNG['profile_semi_private'] = 'Afedersiniz , ama bu profil gizli, sadece arkadaşı olanlar profilini inceleyebilir.';
$LNG['profile_private'] = 'Afedersiniz, Bu profil tamamıyla özel.';
$LNG['profile_not_exist_ttl'] = 'Böyle bir profil yok.';
$LNG['profile_semi_private_ttl'] = 'Profil özel.';
$LNG['profile_private_ttl'] = 'Profil Görünümü Özel Olarak Ayarlanmış.';
$LNG['add_friend'] = 'Arkadaş Olarak Ekle';
$LNG['remove_friend'] = 'Arkadaşlarımdan Çıkar';
$LNG['profile_about'] = 'Hakkında';
$LNG['profile_born'] = 'Doğum';
$LNG['profile_location'] = 'Yer';
$LNG['profile_website'] = 'Kişisel Sayfa';
$LNG['profile_view_site'] = 'Sayfasını Ziyaret Et';
$LNG['profile_view_profile'] = 'Profiline Bak';
$LNG['profile_bio']	= 'Biografi';
$LNG['new_messages_posted'] = 'Heey , Yeni Paylaşımlar var. burayı tıklayıp hemen gözat.';
$LNG['verified_user'] = 'Doğrulanmış Kullanıcı';
$LNG['edit_profile_cover'] = 'Profil Fotoğraflarını değiştir';
$LNG['view_all_notifications'] = 'Daha fazla bildirim göster';
$LNG['view_chat_notifications'] = 'Daha fazla paylaşım göster';
$LNG['close_notifications'] = 'Bildirimleri Kapat';
$LNG['notifications_settings'] = 'Bildirim Ayarları';
$LNG['no_notifications'] = 'Bildirim Yok';
$LNG['search_title'] = 'Arama Sonuçları';
$LNG['view_all_results'] = 'Tüm Sonuçları Göster';
$LNG['close_results'] = 'Sonuçları Kapat';
$LNG['no_results'] = 'Sonuç yok. Başka bir arama gerçekleştirebilirsin.';
$LNG['no_results_ttl'] = 'Arama Sonuçları';
$LNG['search_for_users'] = 'Kullanıcı Arama';
$LNG['search_in_friends'] = 'Arkadaş Arama';
$LNG['follows'] = 'Takip Ettikleri';
$LNG['followed_by'] = 'Takip Edenler';
$LNG['people'] = 'kişi';

// GENERAL //
$LNG['title_profile'] = 'Profil';
$LNG['title_feed'] = 'Haberler';
$LNG['title_post'] = 'Paylaş';
$LNG['title_messages'] = 'Mesajlar';
$LNG['title_settings'] = 'Ayarlar';
$LNG['title_timeline'] = 'Zaman Akışı';
$LNG['title_search'] = 'Arama';
$LNG['title_notifications'] = 'Bildirimler';
$LNG['title_admin']	= 'Yönetici';
$LNG['on'] = 'Açık';
$LNG['off'] = 'Kapalı';
$LNG['none'] = 'Hiçbiri';
$LNG['pages'] = 'Sayfalar';
$LNG['search_for_people'] = 'kişileri, hashtagleri ara';
$LNG['new_message'] = 'Yeni Mesaj';
$LNG['privacy_policy'] = 'Gizlilik Bildirimi';
$LNG['terms_of_use'] = 'Kullanım Şartları';
$LNG['about'] = 'Hakkında';
$LNG['disclaimer'] = 'Feragat';
$LNG['contact'] = 'İletişim';
$LNG['api_documentation'] = 'API Dökümanları';
$LNG['developers'] = 'Geliştiriciler';
$LNG['language'] = 'Dil';

// MONTHS
$LNG['month_1'] = 'Ocak';
$LNG['month_2'] = 'Şubat';
$LNG['month_3'] = 'Mart';
$LNG['month_4'] = 'Nisan';
$LNG['month_5'] = 'Mayıs';
$LNG['month_6'] = 'Haziran';
$LNG['month_7'] = 'Temmuz';
$LNG['month_8'] = 'Ağustos';
$LNG['month_9'] = 'Eylül';
$LNG['month_10'] = 'Ekim';
$LNG['month_11'] = 'Kasım';
$LNG['month_12'] = 'Aralık';
?>