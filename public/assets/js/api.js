/* PLEASE DO NOT COPY AND PASTE THIS CODE. */
(function () {
    var w = window,
        C = '___grecaptcha_cfg',
        cfg = w[C] = w[C] || {},
        N = 'grecaptcha';
    var gr = w[N] = w[N] || {};
    gr.ready = gr.ready || function (f) {
        (cfg['fns'] = cfg['fns'] || []).push(f);
    };
    w['__recaptcha_api'] = 'https://www.google.com/recaptcha/api2/';
    (cfg['render'] = cfg['render'] || []).push('6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK');
    w['__google_recaptcha_client'] = true;
    var d = document,
        po = d.createElement('script');
    po.type = 'text/javascript';
    po.async = true;
    po.charset = 'utf-8';
    po.src = 'https://www.gstatic.com/recaptcha/releases/-ZG7BC9TxCVEbzIO2m429usb/recaptcha__vi.js';
    po.crossOrigin = 'anonymous';
    po.integrity = 'sha384-q0ik326Zm6Jt15ASfVuGOqCAcgeINNtwX8h3fC49XNm1KEAMzT+3P/mbMDx7Q/36';
    var e = d.querySelector('script[nonce]'),
        n = e && (e['nonce'] || e.getAttribute('nonce'));
    if (n) {
        po.setAttribute('nonce', n);
    }
    var s = d.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(po, s);
})();
