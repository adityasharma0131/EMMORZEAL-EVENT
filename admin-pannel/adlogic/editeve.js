function handleEdit(btn) {
    var row = btn.parentNode.parentNode; // Get the row of the clicked button
    var cells = row.cells;

    if (btn.textContent === 'Edit') {
      for (var i = 0; i < cells.length - 1; i++) { // Loop through each cell except the last one
        var cell = cells[i];
        var input = document.createElement('input');
        input.classList.add('ename')
        input.type = 'text';
        input.value = cell.textContent.trim(); // Set the input value to the cell data
        cell.innerHTML = ''; // Clear the cell content
        cell.appendChild(input); // Append the input field to the cell
      }
      btn.textContent = 'Save'; // Change button text to 'Save'
    } else if (btn.textContent === 'Save') {
      for (var i = 0; i < cells.length - 1; i++) { // Loop through each cell except the last one
        var cell = cells[i];
        var input = cell.querySelector('input');
        cell.textContent = input.value; // Update cell content with input value
      }
      btn.textContent = 'Edit'; // Change button text back to 'Edit'
    }
  }





  function handleEdit(btn) {
    var rows = document.querySelectorAll('tbody tr'); // Get all rows in the table body

    if (btn.textContent === 'Edit') {
      rows.forEach(function(row, index) {
        for (var i = 0; i < 2; i++) {
          var cell = row.cells[i];
          var content = (index === 0) ? cell.textContent.trim() : row.cells[i].textContent.trim();
          if (i === 4 || i === 5) {
            var select = document.createElement('select');
            select.innerHTML = `
              <option value="Option 1">Option 1</option>
              <option value="Option 2">Option 2</option>
              <option value="Option 3">Option 3</option>
              <!-- Add more options as needed -->
            `;
            select.value = content;
            cell.innerHTML = ''; // Clear the cell content
            cell.appendChild(select); // Append the select dropdown to the cell
          } else {
            var input = document.createElement('input');
            input.type = 'text';
            input.classList.add('ename')
            input.value = content;
            cell.innerHTML = ''; // Clear the cell content
            cell.appendChild(input); // Append the input field to the cell
          }
        }
      });
      btn.textContent = 'Save'; // Change button text to 'Save'
    } else if (btn.textContent === 'Save') {
      rows.forEach(function(row, index) {
        for (var i = 0; i < 6; i++) {
          var cell = row.cells[i];
          if (i === 4 || i === 5) {
            var select = cell.querySelector('select');
            cell.textContent = select.value; // Update cell content with selected value
          } else {
            var input = cell.querySelector('input');
            cell.textContent = input.value; // Update cell content with input value
          }
        }
      });
      btn.textContent = 'Edit'; // Change button text back to 'Edit'
    }
  }