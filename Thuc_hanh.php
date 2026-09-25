Câu 1:
<?php
// Hàm kiểm tra số nguyên tố
function isPrime($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// Sử dụng hàm để hiển thị danh sách các số nguyên tố từ 1 đến 100
echo "<h3>Danh sách các số nguyên tố từ 1 đến 100:</h3>";
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
?>

Câu 2:
<?php
// 1. Tạo một mảng kết hợp chứa thông tin về sản phẩm với các khóa như name, price và quantity
$products = [
    [
        "name" => "Áo sơ mi nữ thiết kế",
        "price" => 350000,
        "quantity" => 10
    ],
    [
        "name" => "Quần tây công sở",
        "price" => 400000,
        "quantity" => 5
    ],
    [
        "name" => "Giày cao gót nữ",
        "price" => 800000,
        "quantity" => 3
    ]
];

// 2. Hiển thị thông tin của tất cả sản phẩm trong mảng
echo "<h3>Danh sách sản phẩm:</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Tên sản phẩm</th><th>Đơn giá</th><th>Số lượng</th></tr>";
foreach ($products as $p) {
    echo "<tr>";
    echo "<td>" . $p["name"] . "</td>";
    echo "<td>" . number_format($p["price"]) . " VNĐ</td>";
    echo "<td>" . $p["quantity"] . "</td>";
    echo "</tr>";
}
echo "</table>";

// 3. Viết hàm để tính tổng giá trị của tất cả sản phẩm (price * quantity)
function calculateTotalValue($prods) {
    $total = 0;
    foreach ($prods as $p) {
        $total += $p["price"] * $p["quantity"];
    }
    return $total;
}

$tongGiaTri = calculateTotalValue($products);
echo "<h3>Tổng giá trị tất cả sản phẩm: " . number_format($tongGiaTri) . " VNĐ</h3>";
?>
