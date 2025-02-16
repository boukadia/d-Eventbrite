getDatausersInscriptions()

async function getDatausersInscriptions () {
  const url = '/usersUnscriptions'
  try {
    const response = await fetch(url)
    if (!response.ok) {
      throw new Error(`Response status: ${response.status}`)
    }

    data = await response.json()
    console.log('data_test', data)

    populateTableUers(data)
    populateCards(data)
  } catch (error) {
    console.error(error.message)
  }
}

function populateTableUers (data) {
  const tbody = document.getElementById('bodyTableAbonnes')

  console.log(tbody)

  data.forEach(data => {
    const tr = document.createElement('tr')
    tr.setAttribute('data-id', data.id)

    tr.innerHTML = `
      <td>
        <div class="d-flex align-items-center">
          <div class="recent-product-img">
            <img src="assetsOrg/images/icons/user (1).png" alt="user Image">
          </div>
          <div class="ms-2">
            <h6 class="font-mono mb-1 font-14 title-cell">${data.name}</h6>
          </div>
        </div>
      </td>
      <td class="font-mono location-cell">${data.email}</td>
      <td>
        <div class="d-flex align-items-center text-white">
          <span class="font-mono status-cell">${data.title}</span>
        </div>
      </td>
       <td>
        <div class="d-flex align-items-center text-white">
          <i class="me-1 font-18 align-middle bx-rotate-90 bx bx-burst bx-radio-circle-marked"></i>
          <span class="font-mono status-cell">${data.ticket_type}</span>
        </div>
      </td>
    `

    tbody.appendChild(tr)
  })
}

function populateCards (data) {
  function isToday (dateStr) {
    const createdAt = new Date(dateStr)
    const today = new Date()

    return (
      createdAt.getFullYear() === today.getFullYear() &&
      createdAt.getMonth() === today.getMonth() &&
      createdAt.getDate() === today.getDate()
    )
  }

  const ticketsToday = data.filter(ticket => isToday(ticket.created_at))
  const ticketsFree = data.filter(ticket => ticket.ticket_type == 'free')
  const ticketsVip = data.filter(ticket => ticket.ticket_type == 'vip')
  const ticketsPaid = data.filter(ticket => ticket.ticket_type == 'paid')

  document.querySelector('#jh-stats-positive span').textContent =
    data.length / (data.length * 10)
  document.querySelector('#jh-stats-positive p.font-semibold').textContent =
    data.length

  document.querySelector('#jh-stats-negative span').textContent =
    (100 * ticketsToday.length) / 10
  document.querySelector('#jh-stats-negative p.font-semibold').textContent =
    ticketsToday.length

  document.querySelector('#jh-stats-neutral span').textContent =
    (100 * data.length) / (data.length * 10)
  document.querySelector('#jh-stats-neutral p.font-semibold').textContent =
    data.length * 10 - data.length

  const porsTicketFree =
    ((100 * ticketsFree.length) / data.length).toFixed(2)
  const porsTicketVip =
    ((100 * ticketsVip.length) / data.length).toFixed(2)
  const porsTicketPaid =
    ((100 * ticketsPaid.length) / data.length).toFixed(2)

  const containerFree = document.querySelector('#jh-stats-free span')
  const containerVip = document.querySelector('#jh-stats-vip span')
  const containerPaid = document.querySelector('#jh-stats-paid span')

  containerFree.textContent = porsTicketFree + " %"

  if (porsTicketFree > 50) {
    containerFree.classList.add('text-green-600')
  } else if (porsTicketFree < 20) {
    containerFree.classList.add('text-red-600')
  } else {
    containerFree.classList.add('text-yellow-600')
  }

  document.querySelector('#jh-stats-free p.font-semibold').textContent =
    ticketsFree.length

  document.querySelector('#jh-stats-vip p.font-semibold').textContent =
    ticketsVip.length

  containerVip.textContent = porsTicketVip + " %"

  if (porsTicketVip > 50) {
    containerVip.classList.add('text-green-600')
  } else if (porsTicketVip < 20) {
    containerVip.classList.add('text-red-600')
  } else {
    containerVip.classList.add('text-yellow-600')
  }

  containerPaid.textContent = porsTicketPaid + " %"
  document.querySelector('#jh-stats-paid p.font-semibold').textContent =
    ticketsPaid.length

  if (porsTicketPaid > 50) {
    containerPaid.classList.add('text-green-600')
  } else if (porsTicketPaid < 20) {
    containerPaid.classList.add('text-red-600')
  } else {
    containerPaid.classList.add('text-yellow-600')
  }
}
