/* var person = new Object();

person.firstName = "Jeremy";
person.lastName = "McPeak";
person.getFullName = function() {
	return this.firstName + " " + this.lastName;
};
*/

var person = {
	firstName : "Patrick",
	lastName : "White",
	getFullName : function() {
		return this.firstName + " " + this.lastName;
	}
};

alert(person.getFullName());
