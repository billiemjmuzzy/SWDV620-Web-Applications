const subInput = "cooking";
const result = document.querySelector('#result');

function renderList(json) {
    const posts = json.data.children;
    return `<ol>
    ${posts.map(
      post => `<li style="width:90%;">${post.data.title} <a class="button" href=${post.data.url} target='_blank'><i class="fad fa-external-link"></i></a></li>`
    ).join('')}
  </ol>`;
}

async function fetchTopTen(sub) {
    const URL = `https://www.reddit.com/r/${sub}/top/.json?limit=10`;
    try {
        const fetchResult = fetch(new Request(URL, {
            method: 'GET',
            cache: 'reload'
        }));
        const response = await fetchResult;
        if (response.ok) {
            const jsonData = await response.json();
            result.innerHTML = renderList(jsonData);
        } else {
            result.innerHTML = `Response.status: ${response.status}`;
        }
    } catch (e) {
        result.innerHTML = e;
    }
}