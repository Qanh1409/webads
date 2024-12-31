<!-- TIN TỨC -->

@extends('layouts.app')

@section('title', 'Mazda Thaco')

@section('content')

<div style="margin: 20px; font-family: 'Arial', sans-serif; background-color: #f4f4f9;">
    <div style="max-width: 800px; margin: auto; padding: 30px;">
        <h1 style="text-align: center; font-size: 28px; color: #2c3e50; margin-bottom: 20px;">Dự toán trả góp xe</h1>
        <h2 style="text-align: center; font-size: 16px; color: #7f8c8d; margin-bottom: 30px;">Bảng tính chỉ mang tính chất tham khảo</h2>

        <form>
            <!-- Dòng xe -->
            <div style="display: flex; margin-bottom: 20px; align-items: center;">
                <label for="dong-xe" style="width: 30%; font-weight: bold; margin-bottom: 8px; color: #34495e;">Dòng xe</label>
                <select id="dong-xe" name="dong-xe" style="width: 70%; padding: 12px; font-size: 15px; border: 1px solid #ccc; border-radius: 8px;" onchange="updatePhienBan()">
                    <option value="">-- Chọn dòng xe --</option>
                    <option value="mazda-2">Mazda 2</option>
                    <option value="mazda-cx5">Mazda CX5</option>
                </select>
            </div>
            <!-- Phiên bản -->
            <div style="display: flex; margin-bottom: 20px; align-items: center;">
                <label for="phien-ban" style="width: 30%; font-weight: bold; margin-bottom: 8px; color: #34495e;">Phiên bản</label>
                <select id="phien-ban" name="phien-ban" style="width: 70%; padding: 12px; font-size: 15px; border: 1px solid #ccc; border-radius: 8px;">
                    <option>Vui lòng chọn dòng xe trước</option>
                </select>
            </div>

            <!-- Kỳ hạn vay -->
            <div style="display: flex; margin-bottom: 20px; align-items: center;">
                <label for="ky-han" style="width: 30%; font-weight: bold; margin-bottom: 8px; color: #34495e;">Kỳ hạn vay (Năm)</label>
                <input type="number" id="ky-han" name="ky-han" placeholder="Nhập số năm" style="width: 70%; padding: 12px; font-size: 15px; border: 1px solid #ccc; border-radius: 8px;">
            </div>

            <!-- Số tiền trả trước -->
            <div style="display: flex; margin-bottom: 20px; align-items: center;">
                <label for="tra-truoc" style="width: 30%; font-weight: bold; margin-bottom: 8px; color: #34495e;">Số tiền trả trước (%)</label>
                <input type="number" id="tra-truoc" name="tra-truoc" placeholder="Nhập % số tiền trả trước" style="width: 70%; padding: 12px; font-size: 15px; border: 1px solid #ccc; border-radius: 8px;" onblur="checkTraTruoc()">
            </div>

            <!-- Lãi suất -->
            <div style="display: flex; margin-bottom: 20px; align-items: center;">
                <label for="lai-suat" style="width: 30%; font-weight: bold; margin-bottom: 8px; color: #34495e;">Lãi suất (%/năm)</label>
                <input type="number" id="lai-suat" name="lai-suat" placeholder="Nhập lãi suất" style="width: 70%; padding: 12px; font-size: 15px; border: 1px solid #ccc; border-radius: 8px;" onblur="updateGiaXe()">
            </div>
        </form>

        <!-- Kết quả tính toán -->
        <div style="margin-top: 30px; background: #ffffff; padding: 25px; border-radius: 12px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
            <h3 style="text-align: center; font-size: 20px; color: #34495e; margin-bottom: 20px;">Kết quả tính toán</h3>
            <div style="margin-bottom: 15px; font-size: 16px; color: #7f8c8d;">GIÁ XE: <span id="gia-xe" style="font-weight: bold; color: #2ecc71;">0</span></div>
            <div style="margin-bottom: 15px; font-size: 16px; color: #7f8c8d;">TRẢ TRƯỚC: <span id="tra-truoc-20" style="font-weight: bold; color: #2ecc71;">0</span></div>
            <div style="margin-bottom: 15px; font-size: 16px; color: #7f8c8d;">TỔNG TIỀN VAY: <span id="tong-tien-vay" style="font-weight: bold; color: #e74c3c;">0</span></div>
            <div style="margin-bottom: 15px; font-size: 16px; color: #7f8c8d;">TRẢ GÓP THÁNG ĐẦU: <span id="tra-gop-thang-dau" style="font-weight: bold; color: #e74c3c;">0</span></div>
            <div style="margin-bottom: 15px; font-size: 16px; color: #7f8c8d;">LÃI SUẤT (%/năm): <span id="lai-suat-nam" style="font-weight: bold; color: #e67e22;">0</span></div>
            <div style="margin-bottom: 15px; font-size: 16px; color: #7f8c8d;">TỔNG TIỀN LÃI: <span id="tong-tien-lai" style="font-weight: bold; color: #e67e22;">0</span></div>
            <div style="margin-bottom: 15px; font-size: 16px; color: #7f8c8d;">TỔNG TIỀN VAY & LÃI CÒN LẠI: <span id="tong-vay-lai" style="font-weight: bold; color: #e67e22;">0</span></div>
        </div>

        <!-- Nút làm mới -->
        <div style="text-align: center; margin-top: 30px;">
            <button type="button" onclick="resetForm()" style="background-color: rgb(0, 0, 0); color: #ffffff; border: none; padding: 12px 25px; font-size: 16px; border-radius: 8px; cursor: pointer; transition: background-color 0.3s;">
                <strong>Làm mới</strong>
            </button>
        </div>
    </div>

    <script>
        const versions = {
            "mazda-2": [{
                    name: "1.5 AT",
                    price: 418000000
                },
                {
                    name: "1.5 Luxury",
                    price: 494000000
                },
                {
                    name: "1.5 Premium",
                    price: 508000000
                }
            ],
            "mazda-cx5": [{
                    name: "2.0 Deluxe",
                    price: 749000000
                },
                {
                    name: "2.0 Luxury",
                    price: 789000000
                },
                {
                    name: "2.0 Premium Active",
                    price: 819000000
                },
                {
                    name: "2.0 Premium Sport",
                    price: 849000000
                },
                {
                    name: "2.0 Premium Exclusive",
                    price: 869000000
                }
            ]
        };

        function updatePhienBan() {
            const dongXe = document.getElementById("dong-xe").value;
            const phienBanSelect = document.getElementById("phien-ban");
            phienBanSelect.innerHTML = "<option>Vui lòng chọn dòng xe trước</option>";
            if (dongXe in versions) {
                versions[dongXe].forEach(function(version) {
                    const option = document.createElement("option");
                    option.value = version.name;
                    option.textContent = version.name;
                    phienBanSelect.appendChild(option);
                });
            }
        }

        function updateGiaXe() {
            const dongXe = document.getElementById("dong-xe").value;
            const phienBan = document.getElementById("phien-ban").value;
            if (!dongXe || !phienBan) {
                return;
            }

            const version = versions[dongXe].find(function(version) {
                return version.name === phienBan;
            });

            if (version) {
                const giaXe = version.price;
                document.getElementById("gia-xe").textContent = giaXe.toLocaleString("vi-VN") + " VND";

                const traTruocInput = parseFloat(document.getElementById("tra-truoc").value || 20);
                const traTruoc = giaXe * (traTruocInput / 100);
                document.getElementById("tra-truoc-20").textContent = traTruoc.toLocaleString("vi-VN") + " VND";

                const tienVay = giaXe - traTruoc;
                document.getElementById("tong-tien-vay").textContent = tienVay.toLocaleString("vi-VN") + " VND";

                const laiSuatInput = parseFloat(document.getElementById("lai-suat").value || 12);
                const laiSuat = (tienVay * laiSuatInput) / 100;
                document.getElementById("tong-tien-lai").textContent = laiSuat.toLocaleString("vi-VN") + " VND";

                const tongVayLai = tienVay + laiSuat;
                document.getElementById("tong-vay-lai").textContent = tongVayLai.toLocaleString("vi-VN") + " VND";

                const kyHan = parseInt(document.getElementById("ky-han").value || 1);
                const traGopThangDau = tongVayLai / (kyHan * 12);
                document.getElementById("tra-gop-thang-dau").textContent = traGopThangDau.toLocaleString("vi-VN") + " VND";
            }
        }

        function resetForm() {
            document.querySelector("form").reset();
            document.getElementById("gia-xe").textContent = "0";
            document.getElementById("tra-truoc-20").textContent = "0";
            document.getElementById("tong-tien-vay").textContent = "0";
            document.getElementById("tra-gop-thang-dau").textContent = "0";
            document.getElementById("tong-tien-lai").textContent = "0";
            document.getElementById("tong-vay-lai").textContent = "0";
        }
    </script>
</div>







@endsection