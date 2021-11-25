let selectedCourse; 
let sql; 

document.getElementById('selectcourse').addEventListener('change', () => {
    selectedCourse = document.getElementById('selectcourse').value
    document.getElementById('selectcourse').value = selectedCourse
    console.log(selectedCourse)
    
})