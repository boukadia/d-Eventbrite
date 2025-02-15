$(document).on('click', '#toggleBtn', togglePopup)
let dataEvents
let eventFind
const selectLocation = document.getElementById('selectLocation')
const selectCategory = document.getElementById('selectCategories')

function togglePopup () {
  $('#addPopup').toggleClass('hidden')
  getDataVilles()
  getDataCategories()
}

function cancelPopup () {
  $('#addPopup').toggleClass('hidden')
  let oldButton = document.getElementById('btn-modifier')
  if (oldButton) {
    let newButton = oldButton.cloneNode(true)

    newButton.id = 'submit'
    newButton.className += 'px-5 btn btn-light'
    newButton.textContent = 'Ajouter'

    oldButton.replaceWith(newButton)
  }
  getDataVilles()
}

async function getDataVilles () {
  const url = '/villes'
  try {
    const response = await fetch(url)
    if (!response.ok) {
      throw new Error(`Response status: ${response.status}`)
    }

    const dataVilles = await response.json()

    populateSelect(dataVilles)
  } catch (error) {
    console.error(error.message)
  }
}

async function getDataCategories () {
  const url = '/categories'
  try {
    const response = await fetch(url)
    if (!response.ok) {
      throw new Error(`Response status: ${response.status}`)
    }

    const dataCategories = await response.json()

    populateSelectCategories(dataCategories)
  } catch (error) {
    console.error(error.message)
  }
}

async function getDataEvents () {
  const url = '/events'

  try {
    const response = await fetch(url)
    if (!response.ok) {
      throw new Error(`Response status: ${response.status}`)
    }

    dataEvents = await response.json()

    const bodyTableEvents = document.getElementById('bodyTableEvents')

    bodyTableEvents.innerHTML = ''

    populateTable(dataEvents, bodyTableEvents)
  } catch (error) {
    console.error(error.message)
  }
}

function populateTable (data, element) {
  data.forEach(item => {
    
    let row = document.querySelector(`tr[data-id="${item.id}"]`)

    if (!row) {

        row = document.createElement('tr')
      row.setAttribute('data-id', item.id)

      row.innerHTML = `
            <td class="id-cell">${item.id}</td>
            <td>
            <div class="d-flex align-items-center">
            <div class="recent-product-img">
            <img src="assets/images/icons/chair.png" alt="">
            </div>
            <div class="ms-2">
            <h6 class="mb-1 font-14 title-cell">${item.title}</h6>
            </div>
            </div>
            </td>
            <td class="location-cell">${item.location}</td>
            <td>
            <div class="d-flex align-items-center text-white">
            <i class='me-1 font-18 align-middle bx-rotate-90 bx bx-burst bx-radio-circle-marked'></i>
            <span class="status-cell">${item.status}</span>
            </div>
            </td>
            <td>
            <div class="d-flex order-actions">
            <a  onClick={handleEdite(${item.id})}  href="javascript:;" class=""><i class="bx bx-cog"></i></a>
            <a onClick={handleDelete(${item.id})} id="deleteEvent" href="javascript:;" class="ms-4"><i class='bx bxs-message-square-minus'></i></a>
            </div>
            </td>
            `

      element.appendChild(row)
    } else {
      row.querySelector('.id-cell').textContent = item.id
      row.querySelector('.title-cell').textContent = item.title
      row.querySelector('.location-cell').textContent = item.location
      row.querySelector('.status-cell').textContent = item.status
    }
  })
}

async function handleDelete (id) {
  const url = `/deleteEvent?id=${id}`
  try {
    const response = await fetch(url)
    if (!response.status == 200) {
      throw new Error(`Response status: ${response.status}`)
    } else {
      return getDataEvents()
    }
  } catch (error) {
    console.error(error.message)
  }
}

async function handleEdite (id) {
  try {
    const response = await fetch(`/editeEvent?id=${id}`)
    if (!response.status == 200) {
      throw new Error(`Response status: ${response.status}`)
    }

    eventFind = await response.json()

    populateForm(eventFind)
  } catch (error) {
    console.error(error.message)
  }
}

function populateForm (data) {
  document.getElementById('title').value = data.title
  document.getElementById('date').value = data.date.split(' ')[0]
  document.getElementById('price').value = data.price
  document.getElementById('description').value = data.description

  document.getElementById('start_time').value = data.start_time.split(' ')[0]
  document.getElementById('end_time').value = data.end_time.split(' ')[0]

  let oldButton = document.getElementById('submit')
  if (oldButton) {
    let newButton = oldButton.cloneNode(true)

    newButton.id = 'btn-modifier'
    newButton.className += ' bg-sky-600'
    newButton.textContent = 'Modifier'

    oldButton.replaceWith(newButton)
  }

  togglePopup()
}

function populateSelect (data) {
  const selectElement = document.getElementById('selectLocation')
  data.forEach(item => {
    const option = document.createElement('option')
    option.value = item.id
    option.textContent = item.ville
    selectElement.appendChild(option)
  })
}

function populateSelectCategories (data) {
  const selectCategory = document.getElementById('selectCategories')
  data.forEach(item => {
    const option = document.createElement('option')
    option.value = item.id
    option.textContent = item.name
    selectCategory.appendChild(option)
  })
}

$(document).on('click', '#submit', function (e) {
  e.preventDefault()
  const data = getFormData()
  sendData(data)
})

$(document).on('click', '#btn-modifier', function (e) {
  e.preventDefault()
  const data = getFormData()
  updateData(data)
})

function getFormData () {
  const formData = {
    title: document.getElementById('title').value,
    location: document.getElementById('selectLocation').value,
    category: document.getElementById('selectCategories').value,
    start_time: document.getElementById('start_time').value,
    end_time: document.getElementById('end_time').value,
    date: document.getElementById('date').value,
    price: document.getElementById('price').value,
    event_image: document.getElementById('image').value,
    description: document.getElementById('description').value
  }

  return formData
}

async function sendData (data) {
  fetch('/addEvent', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ data })
  })
    .then(response => response.json())
    .then(result => {
      console.log('Success:', result)
      return getDataEvents()
    })
    .catch(error => console.error('Error:', error))
  togglePopup()
}

async function updateData (data) {
  fetch(`/updateEvent?id=${eventFind.id}`, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ data })
  })
    .then(response => response.json())
    .then(result => {
      console.log('Success:', result)
      return getDataEvents()
    })
    .catch(error => console.error('Error:', error))
  togglePopup()
}
