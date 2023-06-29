// ------------------------------------------------- Новое подключение

const formInit = document.querySelector(".form");

if (formInit) {
  const validator = new JustValidate('.form', {});

  validator
    .addField('#text', [{ // можно использовать классы вместо ид
      rule: 'required',
      errorMessage: 'Indtast dit navn',
    }, ])
    .addField('#email', [{ // можно использовать классы вместо ид
        rule: 'required',
        value: true,
        errorMessage: 'Indtast din e-mail',
      },
      {
        rule: 'email',
        errorMessage: 'Indtast venligst en gyldig e-mail',
      },
    ])
    .onSuccess((event) => { // Если форма проходит валидацию то происходит код ниже
      let formData = new FormData(event.target);

      let xhr = new XMLHttpRequest();

      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
          if (xhr.status === 200) {
            alert("Besked sendt!")
          } else {
            alert("Fejl!")
          }
        }
      }

      xhr.open('POST', 'mail.php', true);
      xhr.send(formData);

      event.target.reset();
    })

}