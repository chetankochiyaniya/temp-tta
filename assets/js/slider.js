document.querySelectorAll('.accordion__question').forEach(item => {
    item.addEventListener('click', function() {
        let tabIndex = this.getAttribute('data-tab');
        document.querySelectorAll('.accordion__question').forEach(question => {
            question.classList.remove('expanded');
        });
        document.querySelectorAll('.tab-description').forEach(content => {
            content.classList.remove('active');
        });
        this.classList.add('expanded');
        document.querySelector(`.tab-description[data-tab="${tabIndex}"]`).classList.add('active');
    });
});



document.querySelectorAll('.accordion__question').forEach(item => {
    item.addEventListener('click', function() {
        // Get the data-tab value of the clicked item
        let tabIndex = this.getAttribute('data-tab');

        // Remove active class from all accordion questions and answers
        document.querySelectorAll('.accordion__question').forEach(question => {
            question.classList.remove('expanded');
        });
        document.querySelectorAll('.tab-description').forEach(content => {
            content.classList.remove('active');
        });

        // Add active class to the clicked question and the corresponding answer
        this.classList.add('expanded');
        document.querySelector(`.tab-description[data-tab="${tabIndex}"]`).classList.add('active');
    });
});


//new code