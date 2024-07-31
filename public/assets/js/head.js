/**
* Theme: FlexAdmin - Tailwind CSS 3 Admin Layout & UI Kit Template
* Author: MyraStudio
* Module/App: head js
*/

class Config {

    adjustLayout() {
        var self = this;

        const html = document.getElementsByTagName("html")[0];
        if (window.innerWidth <= 1024) {
            html.setAttribute("data-sidebar-view", "mobile");
        } else {
            html.setAttribute("data-sidebar-view", "default");
        }
    }

    initWindowSize() {
        var self = this;
        window.addEventListener('resize', function (e) {
            self.adjustLayout();
        })
    }

    init() {
        this.adjustLayout();
        this.initWindowSize();
    }
}

new Config().init();