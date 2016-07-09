<?php

$data[] = array(
    "color" => "red",
    "value" => "#f00",
    "message" => "Simple message"
);
$data[] = array(
    "color" => "green",
    "value" => "#0f0",
    "message" => "Message with <strong>HTML</strong> tags"
);
$data[] = array(
    "color" => "red",
    "value" => "#00f",
    "message" => "Am I going to work? I should not! <script>alert('Hello!');</script>"
);
$data[] = array(
    "color" => "magenta",
    "value" => "#f0f",
    "message" => "<img src='https://c2.staticflickr.com/4/3684/11803460685_dd40050e8e_h.jpg'>"
);
$data[] = array(
    "color" => "yellow",
    "value" => "#ff0",
    "message" => ""
);
$data[] = array(
    "color" => "black",
    "value" => "#000",
    "message" => ""
);
$data[] = array(
    "color" => "cyan",
    "value" => "0ff"
);

echo json_encode($data);
?>