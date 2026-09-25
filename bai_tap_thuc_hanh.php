<?php
// --- BÀI 1: In ra số chẵn từ 1 đến 10 ---
echo "=== BAI 1: So chan tu 1 den 10 ===\n";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
echo "\n\n";

// --- BÀI 2: Kiểm tra số nguyên tố ---
echo "=== BAI 2: Kiem tra so nguyen to ===\n";
$n = 7; // Bạn có thể thay đổi số này để kiểm tra
$is_prime = true;

if ($n < 2) {
    $is_prime = false;
} else {
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            $is_prime = false;
            break;
        }
    }
}

if ($is_prime) {
    echo "$n la so nguyen to.\n\n";
} else {
    echo "$n khong phải la so nguyen to.\n\n";
}

// --- BÀI 3: In hình chữ nhật dấu sao (*) ---
echo "=== BAI 3: In hinh chu nhat ===\n";
function inHinhChuNhat($chieuRong, $chieuCao) {
    for ($i = 1; $i <= $chieuCao; $i++) {
        for ($j = 1; $j <= $chieuRong; $j++) {
            echo "* ";
        }
        echo "\n";
    }
}

// Gọi hàm với chiều rộng = 5 và chiều cao = 3
inHinhChuNhat(5, 3);
?>