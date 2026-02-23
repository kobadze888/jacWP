<?php
/**
 * Template Name: All Models Showroom
 */
get_header();

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'ka';
$repeater = get_field('showroom_models'); 

// ფილტრების ზუსტი თანმიმდევრობა და გასაღებები (Keys)
$filters = [
    'all'       => 'ALL',
    'ev'        => 'EV',
    'phev'      => 'PHEV',
    'truck-van' => 'TRUCK', // მნიშვნელოვანია: ემთხვევა ACF-ის მნიშვნელობას
    'pickup'    => 'PICKUP',
    'sedan-suv' => 'SEDAN & SUV',
    'mpv'       => 'MPV',
    'van'       => 'VAN'
];

$grouped = [];
if(is_array($repeater)) {
    foreach($repeater as $row) {
        $type = $row['model_type'];
        
        // თუ ადმინკაში შემთხვევით 'truck' აირჩიე 'truck-van'-ის ნაცვლად, მაინც გამოჩნდება
        if ($type === 'truck') $type = 'truck-van';
        
        $grouped[$type][] = $row;
    }
}
?>

<main class="jac-showroom-v3">
    <div class="showroom-header-minimal">
        <div class="container">
            <h1 class="page-main-title"><?php echo ($current_lang == 'en') ? 'JAC LINEUP' : 'JAC-ის მოდელები'; ?></h1>
        </div>
    </div>

    <nav class="showroom-filter-nav">
        <div class="container">
            <div class="filter-flex">
                <?php foreach($filters as $key => $label): ?>
                    <button class="showroom-filter-btn <?php echo ($key === 'all') ? 'active' : ''; ?>" data-filter="<?php echo $key; ?>">
                        <?php echo $label; ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="showroom-sections-wrap">
            <?php foreach($filters as $key => $label): 
                if($key === 'all' || empty($grouped[$key])) continue; 
            ?>
                <section class="showroom-cat-section" id="section-<?php echo $key; ?>" data-category="<?php echo $key; ?>">
                    <div class="cat-header">
                        <h2 class="cat-label"><?php echo $label; ?></h2>
                    </div>
                    
                    <div class="showroom-grid">
                        <?php foreach($grouped[$key] as $model): ?>
                            <div class="model-card">
                                <div class="model-img-box">
                                    <?php if(!empty($model['model_image'])): ?>
                                        <img src="<?php echo $model['model_image']['url']; ?>" alt="<?php echo esc_attr($model['model_name']); ?>">
                                    <?php else: ?>
                                        <div class="img-placeholder">JAC</div>
                                    <?php endif; ?>
                                </div>
                                <div class="model-details">
                                    <h3 class="model-title"><?php echo esc_html($model['model_name']); ?></h3>
                                    <a href="<?php echo esc_url($model['model_link']); ?>" class="model-link-btn">
                                        <?php echo ($current_lang == 'en') ? 'EXPLORE' : 'აღმოაჩინე'; ?>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
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
    const filterBtns = document.querySelectorAll('.showroom-filter-btn');
    const sections = document.querySelectorAll('.showroom-cat-section');

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
                        // ჩასქროლვა შესაბამის სექციასთან
                        const offset = 150;
                        const elementPos = s.getBoundingClientRect().top + window.pageYOffset;
                        window.scrollTo({ top: elementPos - offset, behavior: 'smooth' });
                    } else {
                        s.style.display = 'none';
                    }
                });
            }
        });
    });
});
</script>

<?php get_footer(); ?>