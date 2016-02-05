<section>
	<input ng-model="bindSearch" placeholder="Search employees.." autofocus><br><br>
	<select ng-model="orderEmp">
		<option value="name">Name</option>
		<option value="title">Title</option>
		<option value="company">Company</option>
	</select><br><br>
	<label>
		<input type="radio" ng-model="direction" checked>
		Ascending
	</label>
	<label>
		<input type="radio" ng-model="direction" value="reverse">
		Descending
	</label>
	<ul>
		<li ng-repeat="emp in employees | filter:bindSearch | orderBy:orderEmp:direction">
			<img ng-src="../assets/images/emp/{{emp.username}}.png" alt="Image of {{emp.username}}">
			<h3>
				<a href="#/emplist_limit/{{employees.indexOf(emp)}}">{{emp.name}}</a>
			</h3>
			<p>{{emp.title + ' - ' + emp.company}}</p>
		</li>
	</ul>
</section>