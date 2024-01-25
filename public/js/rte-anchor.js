document.addEventListener('DOMContentLoaded', function (event) {
    var baseURL = window.location.origin + window.location.pathname;
    document.querySelectorAll(".anchored").forEach(el => {
        el.setAttribute('id', el.textContent.toLowerCase().split(' ').join('-'))
        el.insertAdjacentHTML("beforeend", getAnchorLinkComponent())
        el.querySelector('a.anchor-link').addEventListener('click', (e) => {
            let url = '';
            if (baseURL.endsWith('/')) {
                url = baseURL + '#' + el.getAttribute('id');
            } else {
                url = baseURL + '/#' + el.getAttribute('id');
            }
            document.addEventListener('copy', function (e) {
                e.clipboardData.setData('text/plain', url);
                e.preventDefault();
            }, true);

            $(e.target).tooltip('hide')
                .attr('data-original-title', 'copied')
                .tooltip('show');
            $(e.target).blur(function (e) {
                e.target.setAttribute('data-original-title', 'Copy link to heading')
            })
            document.execCommand('copy');
        });
    })
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
});

function getAnchorLinkComponent() {
    return `<a tabindex="0" class="anchor-link" role="button" title="Copy link to heading" data-toggle="tooltip" data-placement="top">
    </a>`
}
