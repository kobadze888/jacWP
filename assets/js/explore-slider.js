document.addEventListener('DOMContentLoaded', function() {
    let vehicles = (typeof dynamicVehicles !== 'undefined') ? dynamicVehicles : {};
    const tabs = document.querySelectorAll('.type-tab');
    const carImg = document.getElementById('carImage');
    const modelNav = document.querySelector('.model-nav');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    if (!carImg || Object.keys(vehicles).length === 0) return;

    let currentType = Object.keys(vehicles)[0];
    let currentModelIndex = 0;

    function updateModelDisplay() {
        const items = modelNav.querySelectorAll('.model-item');
        items.forEach((item, idx) => {
            item.classList.toggle('active', idx === currentModelIndex);
        });
        const currentModelObj = vehicles[currentType].models[currentModelIndex];
        if (currentModelObj) carImg.src = currentModelObj.image;
    }

    function renderModelList() {
        if (!modelNav || !currentType) return;
        modelNav.innerHTML = '';
        vehicles[currentType].models.forEach((modelObj, index) => {
            const div = document.createElement('div');
            div.className = `model-item ${index === currentModelIndex ? 'active' : ''}`;
            div.textContent = modelObj.name;
            div.onclick = () => {
                currentModelIndex = index;
                updateModelDisplay();
            };
            modelNav.appendChild(div);
        });
        updateModelDisplay();
    }

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const type = tab.getAttribute('data-type');
            if (type !== currentType) {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                currentType = type;
                currentModelIndex = 0;
                renderModelList();
            }
        });
    });

    if(nextBtn) nextBtn.addEventListener('click', () => {
        currentModelIndex = (currentModelIndex + 1) % vehicles[currentType].models.length;
        updateModelDisplay();
    });

    if(prevBtn) prevBtn.addEventListener('click', () => {
        currentModelIndex = (currentModelIndex - 1 + vehicles[currentType].models.length) % vehicles[currentType].models.length;
        updateModelDisplay();
    });

    renderModelList();
});