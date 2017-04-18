function over(id) {
    document.getElementById('parent' + id).removeAttribute('style');
    document.getElementById('parent' + id).setAttribute('style', 'display: block');
}

function out(id) {
    document.getElementById('parent' + id).removeAttribute('style');
    document.getElementById('parent' + id).setAttribute('style', 'display: none');
}