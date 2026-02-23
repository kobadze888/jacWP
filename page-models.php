<?php
/**
 * Template Name: All Models Showroom
 */
get_header();

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';
$repeater = get_field('showroom_models'); 

// ფილტრების თანმიმდევრობა
$filters = [
    'all'       => 'ALL',
    'ev'        => 'EV',
    'phev'      => 'PHEV',
    'truck-van' => 'TRUCK',
    'pickup'    => 'PICKUP',
    'sedan-suv' => 'SEDAN & SUV',
    'mpv'       => 'MPV',
    'van'       => 'VAN'
];

$grouped = [];
if(is_array($repeater)) {
    foreach($repeater as $row) {
        $type = $row['model_type'];
        if ($type === 'truck') $type = 'truck-van';
        $grouped[$type][] = $row;
    }
}
?>

<main class="cinematic-showroom">
    <section class="showroom-intro-hero">
        <div class="container">
            <h1 class="hero-title"><?php echo ($current_lang == 'en') ? 'JAC GLOBAL LINEUP' : 'JAC-ის სამოდელო რიგი'; ?></h1>
            <div class="line-decorator"></div>
        </div>
    </section>

    <nav class="sticky-filter-bar" id="stickyFilter">
        <div class="container">
            <div class="filter-flex">
                <?php foreach($filters as $key => $label): ?>
                    <button class="f-pill <?php echo ($key === 'all') ? 'active' : ''; ?>" data-filter="<?php echo $key; ?>">
                        <?php echo $label; ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="showroom-grid-wrapper">
            <?php foreach($filters as $key => $label): 
                if($key === 'all' || empty($grouped[$key])) continue; 
            ?>
                <section class="model-group-section" id="cat-<?php echo $key; ?>" data-category="<?php echo $key; ?>">
                    <div class="group-label">
                        <h2><?php echo $label; ?></h2>
                        <span class="count-tag"><?php echo count($grouped[$key]); ?></span>
                    </div>
                    
                    <div class="studio-grid">
                        <?php foreach($grouped[$key] as $model): ?>
                            <div class="car-studio-card reveal-item">
                                <div class="car-platform">
                                    <?php if(!empty($model['model_image'])): ?>
                                        <img src="<?php echo $model['model_image']['url']; ?>" alt="<?php echo esc_attr($model['model_name']); ?>">
                                    <?php endif; ?>
                                    <div class="platform-reflection"></div>
                                </div>
                                <div class="car-info-box">
                                    <h3 class="car-model-title"><?php echo esc_html($model['model_name']); ?></h3>
                                    <a href="<?php echo esc_url($model['model_link']); ?>" class="car-details-btn">
                                        <span><?php echo ($current_lang == 'en') ? 'View Details' : 'დეტალურად'; ?></span>
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.f-pill');
    const sections = document.querySelectorAll('.model-group-section');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');

            // ღილაკების აქტივაცია
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            if (filter === 'all') {
                sections.forEach(s => s.style.display = 'block');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            } else {
                sections.forEach(s => {
                    if (s.getAttribute('data-category') === filter) {
                        s.style.display = 'block';
                        // ჩასქროლვა შესაბამის სექციასთან (ჰედერის სიმაღლის გათვალისწინებით)
                        const offset = 160; 
                        const elementPos = s.getBoundingClientRect().top + window.pageYOffset;
                        window.scrollTo({ top: elementPos - offset, behavior: 'smooth' });
                    } else {
                        s.style.display = 'none';
                    }
                });
            }
        });
    });

    // Reveal ანიმაცია სქროლისას
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.reveal-item').forEach(el => observer.observe(el));
});
</script>

<?php get_footer(); ?>