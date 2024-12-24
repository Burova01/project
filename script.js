fetch('data.csv')
  .then(response => response.text())
  .then(data => {
    const appointments = Papa.parse(data, {header: true}).data; // ���������� ���������� Papa Parse ��� �������� CSV
    const appointmentsContainer = document.getElementById('appointments');
    appointments.forEach(appointment => {
      const appointmentDiv = document.createElement('div');
      appointmentDiv.classList.add('appointment');
      appointmentDiv.innerHTML = `
        <h3>${appointment.patient_name}</h3>
        <p>����: ${appointment.doctor_name}</p>
        <p>����: ${appointment.appointment_date}</p>
        <p>�����: ${appointment.appointment_time}</p>
        <p>������: ${appointment.status}</p>
      `;
      appointmentsContainer.appendChild(appointmentDiv);
    });
  });





