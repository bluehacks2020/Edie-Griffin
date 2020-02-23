var ToDoApp;

window.onload = function(){

	ToDoApp = new Vue({
		el : '#todoapp',
		data : {
			name: 'Simple ToDo App',
			current_window: 'add-note',
			note : {
				title: '',
				body: ''
			},
			notes : []
		},	
		methods : {
			walk: function(){
				alert('This is walk function');
			},
			change_window: function(window_name){
				this.current_window = window_name;
			},
			add_note: function(){
				var noteInfo = {
					'title' : this.note ['title'],
					'body'  : this.note ['body']
								}
				this.notes.push(noteInfo);
				alert("note added");
				this.change_window('listing');
			}
		}
	});
}

