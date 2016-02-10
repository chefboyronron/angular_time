<form name="form1">
<p>Welcome : {{user.name}}</p>
<input type="text" placeholder="username" required ng-model="user.name">
<br><br>
<input type="password" placeholder="password" required ng-model="user.pass">
<br><br>
<button type="submit" ng-disabled="form1.$invalid" ng-click="login(user)">Submit</button>
</form>
{{responseMsg}}