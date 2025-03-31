document.addEventListener('DOMContentLoaded', function() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabPanes = document.querySelectorAll('.tab-pane');

    // Активация вкладки по умолчанию
    tabBtns[0]?.classList.add('active');
    tabPanes[0]?.classList.add('active');

    tabBtns.forEach((btn) => {
        btn.addEventListener('click', function() {
            const tabId = btn.getAttribute('data-tab');
            const activeTab = document.querySelector(`#${tabId}-tab`);

            // Проверка существования вкладки
            if (!activeTab) {
                console.error(`Вкладка с ID ${tabId}-tab не найдена`);
                return;
            }

            // Удалить активный класс у всех кнопок и вкладок
            tabBtns.forEach((b) => b.classList.remove('active'));
            tabPanes.forEach((p) => p.classList.remove('active'));

            // Добавить активный класс к текущей кнопке и вкладке
            btn.classList.add('active');
            activeTab.classList.add('active');
        });
    });
});
