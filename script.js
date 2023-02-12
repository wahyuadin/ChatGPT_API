const input = document.querySelector('input')
const button = document.querySelector('button')
const textarea = document.querySelector('textarea')

var communicator = ''
var bot = ''
button.onclick = () => {
    var prompt = input.value
    if (prompt != '') {
        bottomScroll();
        (textarea.innerHTML == '') ? communicator = 'Kamu: ' : communicator = '\n\Kamu: '
        textarea.innerHTML += communicator + prompt
        var source = new SSE("request.php?prompt=" + prompt);
        input.value = ''
        input.focus()
        source.addEventListener('message', function (e) {
            if (e.data) {
                if (e.data != '[DONE]') {
                    var tokens = JSON.parse(e.data).choices[0].text
                    textarea.innerHTML += tokens
                } else {
                    console.log('Completed');
                }
            }
        })
        source.stream()
    }
}

function bottomScroll() {
    textarea.scrollIntoView(false)
    textarea.scrollTo(0, textarea.scrollHeight)
}
