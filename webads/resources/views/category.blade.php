<!-- Gọi header -->
@include('layouts.header_users')

<!-- Nội dung chính của trang category -->
<div style="max-width: 1200px; margin: 0 auto; padding: 20px;">
    <h1 style="text-align: center; margin-bottom: 40px; font-size: 36px; font-weight: bold; color: #333;">Danh mục các phân khúc xe</h1>

    <!-- SUV Section -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; font-weight: bold; color: #555; margin-bottom: 20px; border-bottom: 2px solid #ddd; padding-bottom: 10px;">SUV</h2>
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
            <div style="flex: 1 1 300px; border: 1px solid #eee; border-radius: 10px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); padding: 20px; transition: transform 0.3s, box-shadow 0.3s; background-color: #fafafa;">
                <h5 style="font-size: 20px; font-weight: bold; margin-bottom: 10px; color: #444;">Toyota Fortuner</h5>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 8px;">
                        <a href="#" style="text-decoration: none; color: #007bff; font-weight: 500;">Phiên bản 2.4G</a>
                    </li>
                    <li style="margin-bottom: 8px;">
                        <a href="#" style="text-decoration: none; color: #007bff; font-weight: 500;">Phiên bản 2.7V</a>
                    </li>
                    <li style="margin-bottom: 8px;">
                        <a href="#" style="text-decoration: none; color: #007bff; font-weight: 500;">Phiên bản Legender</a>
                    </li>
                </ul>
            </div>
            <div style="flex: 1 1 300px; border: 1px solid #eee; border-radius: 10px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); padding: 20px; transition: transform 0.3s, box-shadow 0.3s; background-color: #fafafa;">
                <h5 style="font-size: 20px; font-weight: bold; margin-bottom: 10px; color: #444;">Ford Everest</h5>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 8px;">
                        <a href="#" style="text-decoration: none; color: #007bff; font-weight: 500;">Phiên bản Ambiente</a>
                    </li>
                    <li style="margin-bottom: 8px;">
                        <a href="#" style="text-decoration: none; color: #007bff; font-weight: 500;">Phiên bản Trend</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Sedan Section -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; font-weight: bold; color: #555; margin-bottom: 20px; border-bottom: 2px solid #ddd; padding-bottom: 10px;">Sedan</h2>
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
            <div style="flex: 1 1 300px; border: 1px solid #eee; border-radius: 10px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); padding: 20px; transition: transform 0.3s, box-shadow 0.3s; background-color: #fafafa;">
                <h5 style="font-size: 20px; font-weight: bold; margin-bottom: 10px; color: #444;">Toyota Camry</h5>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 8px;">
                        <a href="#" style="text-decoration: none; color: #007bff; font-weight: 500;">Phiên bản 2.0G</a>
                    </li>
                    <li style="margin-bottom: 8px;">
                        <a href="#" style="text-decoration: none; color: #007bff; font-weight: 500;">Phiên bản 2.5Q</a>
                    </li>
                </ul>
            </div>
            <div style="flex: 1 1 300px; border: 1px solid #eee; border-radius: 10px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); padding: 20px; transition: transform 0.3s, box-shadow 0.3s; background-color: #fafafa;">
                <h5 style="font-size: 20px; font-weight: bold; margin-bottom: 10px; color: #444;">Honda Accord</h5>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 8px;">
                        <a href="#" style="text-decoration: none; color: #007bff; font-weight: 500;">Phiên bản 1.5 Turbo</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Hatchback Section -->
    <section style="margin-bottom: 50px;">
        <h2 style="font-size: 28px; font-weight: bold; color: #555; margin-bottom: 20px; border-bottom: 2px solid #ddd; padding-bottom: 10px;">Hatchback</h2>
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
            <div style="flex: 1 1 300px; border: 1px solid #eee; border-radius: 10px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); padding: 20px; transition: transform 0.3s, box-shadow 0.3s; background-color: #fafafa;">
                <h5 style="font-size: 20px; font-weight: bold; margin-bottom: 10px; color: #444;">Kia Morning</h5>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 8px;">
                        <a href="#" style="text-decoration: none; color: #007bff; font-weight: 500;">Phiên bản Standard</a>
                    </li>
                    <li style="margin-bottom: 8px;">
                        <a href="#" style="text-decoration: none; color: #007bff; font-weight: 500;">Phiên bản Luxury</a>
                    </li>
                </ul>
            </div>
            <div style="flex: 1 1 300px; border: 1px solid #eee; border-radius: 10px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); padding: 20px; transition: transform 0.3s, box-shadow 0.3s; background-color: #fafafa;">
                <h5 style="font-size: 20px; font-weight: bold; margin-bottom: 10px; color: #444;">Mazda 2</h5>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 8px;">
                        <a href="#" style="text-decoration: none; color: #007bff; font-weight: 500;">Phiên bản Sport</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>

<!-- Gọi footer -->
@include('layouts.footer_users')