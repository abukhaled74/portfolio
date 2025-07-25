<?php

$get_about_me = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `about_me`"));

$name = $get_about_me['name'];

$typing_title = $get_about_me['typing_title'];
$typing_title = explode('+', $typing_title);

$bio = $get_about_me['bio'];
$phone_number = $get_about_me['phone_number'];
$email = $get_about_me['email'];
$address = $get_about_me['address'];

$birthday = $get_about_me['birthday']; // The birthday in yyyy-mm-dd format
$datetime = new DateTime($birthday);
$interval = $datetime->diff(new DateTime());
$age = $interval->y; // The age in years

$ip = $get_about_me['ip'];
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
$ip = $ipdat->geoplugin_countryCode;

$verification_badge = $get_about_me['verification_badge'];
$date = $get_about_me['date'];
$img_profile_path = $get_about_me['img_profile_path'];
$img_cover_path = $get_about_me['img_cover_path'];
$img_clients_path = $get_about_me['img_clients_path'];
$url_facebook = $get_about_me['url_facebook'];
$url_twitter = $get_about_me['url_twitter'];
$url_instagram = $get_about_me['url_instagram'];
$url_linkedin = $get_about_me['url_linkedin'];
$url_behance = $get_about_me['url_behance'];
$url_telegram = $get_about_me['url_telegram'];
$url_whatsapp = $get_about_me['url_whatsapp'];

if (empty($img_profile_path)) {
    $img_profile_path = './admin/pages/upload/default.png';
}

if (empty($img_cover_path)) {
    $img_cover_path = './admin/pages/upload/1000x520.png';
}

if (empty($img_clients_path)) {
    $img_clients_path = './admin/pages/upload/1000x520.png';
}




$get_resume = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `resume`"));

$nameUniversity = $get_resume['nameUniversity'];
$city = $get_resume['city'];
$holds = $get_resume['holds'];
$form_to_year = $get_resume['form_to_year'];

$nameTitle = $get_resume['nameTitle'];
$city2 = $get_resume['city2'];
$vision = $get_resume['vision'];
$form_to_year2 = $get_resume['form_to_year2'];






$get_potfolio_videos = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as count FROM `portfolio` WHERE type = 'videos'"))['count'];
$get_potfolio_design = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as count FROM `portfolio` WHERE type = 'design'"))['count'];
$get_potfolio_followers = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as count FROM `portfolio` WHERE type = 'followers'"))['count'];
$get_potfolio_logo = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as count FROM `portfolio` WHERE type = 'logo'"))['count'];
$get_potfolio_advertising = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as count FROM `portfolio` WHERE type = 'advertising'"))['count'];



$get_setting = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `setting`"));
$title = $get_setting['title'];
$description = $get_setting['description'];
$keywords = $get_setting['keywords'];
$changeColor = $get_setting['cheange_color'];
$maintenanceMode = $get_setting['switch'];

?>