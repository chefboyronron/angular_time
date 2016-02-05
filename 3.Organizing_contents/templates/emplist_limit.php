<section>
	<div ng-model="employees">
		<p>
			<a href="#/emplist_limit/{{prevItem}}">back</a> | <a href="#/emplist_limit/{{nextItem}}">next</a>
		</p>
		<img ng-src="../assets/images/emp/{{employees[theEmp].username}}.png" alt="Image of {{employees[theEmp].username}}">
		<h3>{{employees[theEmp].name}}</h3>
		<p>{{employees[theEmp].title + ' - ' + employees[theEmp].company}}</p>
		<p>
			<a href="1.Routing.php">Back to search</a>
		</p>
	</div>
</section>