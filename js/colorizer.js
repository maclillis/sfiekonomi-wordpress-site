jQuery(document).ready(function($) {

    // Color variables
    var sfiBudget = '#524696';
    var sfiArbete = '#96C11F';
    var sfiBank = '#A81C3A';
    var sfiTrygghet = '#009CB2';
    var sfiPensioner = '#F07D00';
    var sfiBoende = '#7C0959';
    var sfiBetala = '#009338';
    var sfiBetalaTid = '#8967AA';
    var sfiAvtal = '#F6A200';
    var sfiSpara = '#E6007E';
    var sfiForsak = '#00587D';
    var sfiTest = '#333333';

    var color;

    function colorMixer(color){
        $('#sfi-back-top-inner').css('background-color', color);
        $('.sfi-chapter-divider').css('background-color', color);
        $('.uagb-column__inner-wrap video').css('border-color', color);
        $('.chapter-quiz').css('border-color', color);
        $('.sfi-quiz-submit, .sfi-quiz-reload').css('background-color', color);
        $('.uagb-column__inner-wrap ul').css('color', color);
        $('.current-marker').css('background-color', color);
        $('.sfi-menu-border').css('background-color', color);
        $('.current-menu-item .sfi-chapter-bubble').css('background-color', color);
    }
    
    //Budget och skatt
    if (colorizer_vars.postID === '236') {
        color = sfiBudget;
        colorMixer(color);

    //Söka arbete
    } else if (colorizer_vars.postID === '244') {
        color = sfiArbete;
        colorMixer(color);
        $('.pag-2 .sfi-chapter-bubble p').css('color', 'black');
        $('#sfi-back-top-inner i').css('color', 'black');

    //Bank-id
    } else if (colorizer_vars.postID === '245') {
        color = sfiBank;
        colorMixer(color);

    //Trygghet för alla
    } else if (colorizer_vars.postID === '247') {
        color = sfiTrygghet;
        colorMixer(color);
        $('.pag-4 .sfi-chapter-bubble p').css('color', 'black');
        $('#sfi-back-top-inner i').css('color', 'black');

    //Pensioner
    } else if (colorizer_vars.postID === '248') {
        color = sfiPensioner;
        colorMixer(color);
        $('.pag-5 .sfi-chapter-bubble p').css('color', 'black');
        $('#sfi-back-top-inner i').css('color', 'black');

    //Boende
    } else if (colorizer_vars.postID === '249') {
        color = sfiBoende;
        colorMixer(color);

    //Betala räkningar        
    } else if (colorizer_vars.postID === '250') {
        color = sfiBetala;
        colorMixer(color);
        $('.pag-7 .sfi-chapter-bubble p').css('color', 'black');
        $('#sfi-back-top-inner i').css('color', 'black');

    //Betala i tid  
    } else if (colorizer_vars.postID === '251') {
        color = sfiBetalaTid;
        colorMixer(color);

    //Avtal och köp 
    } else if (colorizer_vars.postID === '252') {
        color = sfiAvtal;
        colorMixer(color);
        $('.pag-9 .sfi-chapter-bubble p').css('color', 'black');
        $('#sfi-back-top-inner i').css('color', 'black');
    
    //Spara och låna 
    } else if (colorizer_vars.postID === '253') {
        color = sfiSpara;
        colorMixer(color);
    
    //Försäkringar        
    } else if (colorizer_vars.postID === '254') {
        color = sfiForsak;
        colorMixer(color);

    //Testfrågor
    } else if (colorizer_vars.postID === '323') {
        $('.sfi-bottom-navigation-wrapper').hide();

        color = sfiTest;
        colorMixer(color);
    } else {
        $('.sfi-chapter-divider').css('background-color', '#D6D6D6');
        $('.sfi-chapter-divider, .sfi-chapter-divider-archive').css('height', '1px');
    }
});