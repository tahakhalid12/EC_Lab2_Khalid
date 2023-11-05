function applyStyles() {
  var colorInput = document.getElementById('color').value;
  var borderWidthInput = document.getElementById('borderWidth').value;
  
  var textElement = document.getElementById('text');
  textElement.style.color = 'rgb(' + colorInput + ')';
  textElement.style.borderStyle = 'solid'; // Add this line to set border style
  textElement.style.borderColor = 'rgb(' + colorInput + ')'; // Add this line if you want the border color to match the text color
  textElement.style.borderWidth = borderWidthInput + 'px';
}
