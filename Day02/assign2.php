<?php
// 카드 정보를 받아옵니다.
$cardType = $_POST["card-type"];
$cardNumber = $_POST["card-number"];
$crcNumber = $_POST["crc-number"];
$cardHolderName = $_POST["card-holder-name"];

// 받아온 카드 정보의 유효성을 검사합니다.
if ($cardType != "VISA" && $cardType != "amEx" && $cardType != "Mastercard") {
  echo "잘못된 카드 타입입니다.";
  exit;
}

if (!preg_match("/^\d{16}$/", $cardNumber)) {
  echo "잘못된 카드 번호입니다.";
  exit;
}

if (!preg_match("/^\d{3}$/", $crcNumber)) {
  echo "잘못된 CRC 번호입니다.";
  exit;
}

if ($cardHolderName == "") {
  echo "카드 소유자 이름을 입력해주세요.";
  exit;
}

// 받아온 카드 정보를 데이터베이스에 저장합니다.
// 여기에 데이터베이스 저장 코드를 작성하면 됩니다.

// 처리 결과를 출력합니다.
echo "카드 정보가 정상적으로 처리되었습니다.";
?>
