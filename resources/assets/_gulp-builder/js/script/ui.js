export let ui = {
    //PHONE MASK

    initPhoneMask: function() {
        $('input[type="tel"]').mask('+38 (999) 999-99-99');
    },
    //POPUPS

    /**
     * function opens popup by id
     *
     * @param modalEL - id of the element
     */

    openPopup(modalEL){
        $.magnificPopup.open({
            showCloseBtn: false,
            type: 'inline',
            tLoading: 'Загрузка...',
            items: {
                src: modalEL
            }
        });
    },

    /**
     * function opens popup by id
     *
     * @param el - the element which closes popup when you click on it
     */

    closePopup(el) {
        $('body').on('click', el, function(event) {
            event.preventDefault();
            $.magnificPopup.close();
        });
    },

    //ACCORDEON

    /**Accordeon functionality
     *
     * @param accordionTtl - an element which you click on
     * @param accordionCnt - the content of the define element
     * @param activeClassTtl - active class witch change styles
     */
    accordion: function(accordionTtl, accordionCnt, activeClassTtl = '__active' ){
        $('body').on('click', accordionTtl, function (event) {
            event.preventDefault();
            if($(accordionTtl).hasClass(activeClassTtl) && !$(this).hasClass(activeClassTtl)){
                $(accordionTtl).removeClass(activeClassTtl);
                $(accordionCnt).slideUp(400);
            }
            $(this).toggleClass(activeClassTtl);
            $(this).next(accordionCnt).slideToggle(400);

        });
    },
//POPUP GALLERY

    /**
     * function opens popup with an item when you click on it
     *
     * @param el - an element which we choose as a gallery item
     */
    galleryPopupInit(el) {
        $(el).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            tLoading: 'Загрузка изображения #%curr%...',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
            }
        });
    },
    //TABS
    /**
     * tabs initialization
     *
     * @param tabsLnk
     * @param tabsCnt
     * @param tabsParent
     * @param activeClassLnk
     * @param activeClassCnt
     */
    tabsInit(tabsLnk, tabsCnt, tabsParent, activeClassLnk='__active', activeClassCnt = '__show-cnt'){
        $('body').on('click', tabsLnk, function(event) {
            event.preventDefault();
            ui.tabsChange(this, tabsCnt, tabsParent, activeClassLnk, activeClassCnt);
        });
    },
    /**
     * tabs functionality
     * function changes content according to the tabs
     *
     * @param tabsLnk - tab, element which you click on
     * @param tabsCnt - a block with content of the tabs
     * @param tabsParent - a parent block in which tabs and content are
     * @param activeClassLnk - tab class that make it active and visible
     * @param activeClassCnt - content block class that make it active and visible
     */
    tabsChange(tabsLnk, tabsCnt, tabsParent, activeClassLnk, activeClassCnt){
        let $tabLink = $(tabsLnk);

        //check whether tab has an active class

        if ($tabLink.hasClass(activeClassLnk)) {
            return;
        }
        //add an active class to tab if it doesn't have it
        $tabLink.addClass(activeClassLnk);

        //choose all neighboring tabs and remove an active class from them
        let $sameEls = $tabLink .siblings();
        $sameEls.removeClass(activeClassLnk);

        //get tab's index and choose all content blocks in the parent element
        let $tabLinkIndex = $tabLink.index();
        let $tabWithCnt = $tabLink.closest(tabsParent).find(tabsCnt);

        //remove an active class from all content blocks and add it to a block with an equal index and show it
        $tabWithCnt.removeClass(activeClassCnt).eq($tabLinkIndex).addClass(activeClassCnt);
    },
}