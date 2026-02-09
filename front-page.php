<?php get_header(); ?>

    <section class="hero-slider">
        <!-- Slide 1 -->
        <div class="slide active">
            <video class="bg-video" autoplay muted loop playsinline>
                <source src="https://jacen.jac.com.cn/_nuxt/videos/e30x.b0f0a4d.mp4" type="video/mp4">
            </video>
            <div class="hero-content">
                <h1 class="hero-title">მუდამ სახალისო.<br>მუდამ ფერადი.</h1>
                <p class="hero-subtitle">ახალი ჭკვიანი ქალაქის ავტომობილი, ისეთივე მოქნილი, როგორიც თქვენ ხართ.</p>
                <a href="#" class="btn-white-pill">გაიგეთ მეტი</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&q=80&w=2000');">
            <div class="hero-content">
                <h1 class="hero-title">სუფთა ხედვა.<br>სუფთა მომავალი.</h1>
                <p class="hero-subtitle">გამოსცადეთ ელექტრო მობილობის ახალი ერა.</p>
                <a href="#" class="btn-white-pill">აღმოაჩინე EV</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1542362567-b05503f3f5f4?auto=format&fit=crop&q=80&w=2000');">
            <div class="hero-content">
                <h1 class="hero-title">ძალა.<br>შესრულება.</h1>
                <p class="hero-subtitle">შექმნილია ნებისმიერი გზის დასაპყრობად.</p>
                <a href="#" class="btn-white-pill">ნახეთ სატვირთოები</a>
            </div>
        </div>

        <div class="slider-indicators">
            <div class="indicator-line active" onclick="manualSlide(0)">
                <div class="indicator-progress"></div>
            </div>
            <div class="indicator-line" onclick="manualSlide(1)">
                <div class="indicator-progress"></div>
            </div>
            <div class="indicator-line" onclick="manualSlide(2)">
                <div class="indicator-progress"></div>
            </div>
        </div>
    </section>

    <section class="explore-section">
        <h2 class="section-title">აღმოაჩინე JAC-ის მოდელები</h2>

        <div class="type-tabs">
            <div class="type-tab active" data-type="sedan">
                <i class="fa-solid fa-car tab-icon"></i>
                <span>სედანი და SUV</span>
            </div>
            <div class="type-tab" data-type="truck">
                <i class="fa-solid fa-truck tab-icon"></i>
                <span style="font-family: 'Times New Roman', serif;">სატვირთო და ვენი</span>
            </div>
            <div class="type-tab" data-type="pickup">
                <i class="fa-solid fa-truck-pickup tab-icon"></i>
                <span style="font-family: 'Times New Roman', serif;">პიკაპი</span>
            </div>
        </div>

        <div class="model-nav">
            <div class="model-item active">E30X</div>
            <div class="model-item">JS6 PHEV</div>
            <div class="model-item">JS8 PRO</div>
            <div class="model-item">JS6 2026</div>
            <div class="model-item">JS4</div>
            <div class="model-item">RF8</div>
        </div>

        <div class="slider-wrapper">
            <button class="arrow-btn arrow-prev" id="prevBtn">
                <i data-lucide="chevron-left"></i>
            </button>
            <img src="https://jacen.jac.com.cn/_nuxt/img/E30X.1d6d4d6.png" alt="Vehicle" class="car-img" id="carImage">
            <button class="arrow-btn arrow-next" id="nextBtn">
                <i data-lucide="chevron-right"></i>
            </button>
        </div>

        <button class="btn-black-pill">ყველა მოდელი</button>

    </section>

    <!-- NEWS SECTION -->
    <section class="news-section">
        <div class="news-header">
            <h2 class="news-title">აღმოაჩინე JAC</h2>
        </div>

        <div class="news-grid" id="newsGrid">
            <!-- Card 1 -->
            <div class="news-card active">
                <div class="news-img-container">
                    <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&q=80&w=800" alt="News 1" class="news-img">
                </div>
                <div class="news-date">2026/01/18</div>
                <div class="news-item-title">JAC Motors-მა დუბაიში პროდუქტის წარდგენის ღონისძიება გამართა</div>
            </div>

            <!-- Card 2 -->
            <div class="news-card">
                <div class="news-img-container">
                    <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&q=80&w=800" alt="News 2" class="news-img">
                </div>
                <div class="news-date">2026/01/14</div>
                <div class="news-item-title">JAC Motors-მა 2025 წლის ჩინეთის ტოპ 100 ბრენდში აღიარება მოიპოვა</div>
            </div>

            <!-- Card 3 -->
            <div class="news-card">
                <div class="news-img-container">
                    <img src="https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?auto=format&fit=crop&q=80&w=800" alt="News 3" class="news-img">
                </div>
                <div class="news-date">2025/12/22</div>
                <div class="news-item-title">JAC Motors-მა ბრაზილიაში უახლესი სატვირთო მოდელები წარადგინა</div>
            </div>
        </div>

        <!-- Mobile Controls for News -->
        <div class="news-mobile-controls">
            <div class="news-nav-btn" id="newsPrev"><i data-lucide="chevron-left"></i></div>
            <div class="news-dots" id="newsDots">
                <!-- JS Will Populate -->
            </div>
            <div class="news-nav-btn" id="newsNext"><i data-lucide="chevron-right"></i></div>
        </div>

        <button class="btn-black-pill">ყველა სიახლე</button>
    </section>

    <div style="height: 100px; background: #fff;"></div>

<?php get_footer(); ?>