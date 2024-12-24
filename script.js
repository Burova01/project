fetch('data.csv')
  .then(response => response.text())
  .then(data => {
    const appointments = Papa.parse(data, {header: true}).data; // Используем библиотеку Papa Parse для парсинга CSV
    const appointmentsContainer = document.getElementById('appointments');
    appointments.forEach(appointment => {
      const appointmentDiv = document.createElement('div');
      appointmentDiv.classList.add('appointment');
      appointmentDiv.innerHTML = `
        <h3>${appointment.patient_name}</h3>
        <p>Врач: ${appointment.doctor_name}</p>
        <p>Дата: ${appointment.appointment_date}</p>
        <p>Время: ${appointment.appointment_time}</p>
        <p>Статус: ${appointment.status}</p>
      `;
      appointmentsContainer.appendChild(appointmentDiv);
    });
  });





