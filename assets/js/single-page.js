const firstBlogFilter = document.querySelectorAll('.blog-filter')[0];
const firstEducationFilter = document.querySelectorAll('.education-filter')[0];
const firstProductFilter = document.querySelectorAll('.product-filter')[0];
const hash = window.location.hash;
if(firstBlogFilter) {
    pageTabs(firstBlogFilter);
}
if(firstEducationFilter) {
    pageTabs(firstEducationFilter);
} 
if(firstProductFilter) {
    pageTabs(firstProductFilter);
} 
if(hash) {
    pageTabs(document.querySelector(hash));
}


function pageTabs (event) {
    if(event.target) {
        if(event.target.dataset.filter || event.target.closest('.filter')){
            const activeButton = (event.target.dataset.filter ) ? event.target : event.target.closest('.filter');
            const buttons = document.querySelectorAll(`.${activeButton.classList[0]}`);
            const tabs = document.querySelectorAll(`.${activeButton.classList[0]}-tab`);
            const tabNumber = activeButton.dataset.filter;
            if(!activeButton.classList.contains('_active')) {
                buttons.forEach(element => {
                    element.classList.remove('_active');
                });
                tabs.forEach(element => {
                    element.classList.remove('_active');
                    if(element.dataset.filter == tabNumber) {
                        element.classList.add('_active');
                    }
                });
                activeButton.classList.add('_active');
            }
        }
    }
    else {
        if(event.dataset.filter){
            const activeButton = event;
            const buttons = document.querySelectorAll(`.${activeButton.classList[0]}`);
            const tabs = document.querySelectorAll(`.${activeButton.classList[0]}-tab`);
            const tabNumber = activeButton.dataset.filter;
            if(!activeButton.classList.contains('_active')) {
                buttons.forEach(element => {
                    element.classList.remove('_active');
                });
                tabs.forEach(element => {
                    element.classList.remove('_active');
                    if(element.dataset.filter == tabNumber) {
                        element.classList.add('_active');
                    }
                });
                activeButton.classList.add('_active');
            }
        }
    }
}