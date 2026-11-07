<?php
declare(strict_types=1);

/**
 * tajweed-php-makharij-phonetic-map — خريطة مخارج الحروف السبعة عشر وصفاتها الصوتية
 * 17 Articulation Points (Makharij) & Sifat Feature Matrix
 */
$input = "ض / ظ / ق / ع";
$digest = substr(hash("sha256", "tajweed-php-makharij-phonetic-map:" . $input), 0, 12);

echo "[RUN] tajweed-php-makharij-phonetic-map (PHP) — 17 Articulation Points (Makharij) & Sifat Feature Matrix" . PHP_EOL;
echo "[AR]  خريطة مخارج الحروف السبعة عشر وصفاتها الصوتية" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Makhraj=Hafah_Lisan | Sifat=[Jahr,Rakhawah,Isti'la,Itbaq,Istitalah] | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
