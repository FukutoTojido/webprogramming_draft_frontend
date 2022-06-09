let settingsParam = "general";

addCSS = (option, cssLinkIndex) => {
    let oldCSS = document.getElementsByTagName("link").item(cssLinkIndex);

    let newCSS = document.createElement("link");
    newCSS.setAttribute("rel", "stylesheet");
    newCSS.setAttribute("type", "text/css");
    newCSS.setAttribute("href", `css/accountContent/${option}.css`);

    if (!oldCSS)
        document.getElementsByTagName(`head`).item(0).appendChild(newCSS);
    else
        document
            .getElementsByTagName(`head`)
            .item(0)
            .replaceChild(newCSS, oldCSS);
};

settingsLoad = (option) => {
    $(".settingsContent").animate({ opacity: 0 }, 400);

    setTimeout(() => {
        $(".settingsContent").load(`content/accountContent/${option}.php`);
        addCSS(option, 5);

        setTimeout(() => {
            $(".settingsContent").animate({ opacity: 1 }, 400);
        }, 100);
    }, 500);
};

settingsLoad(settingsParam);
