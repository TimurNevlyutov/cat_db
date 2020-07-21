<?php

echo '
<form id="commonInput" action="../php/commonInputScript.php" method="POST">
<div class="firstInformForm">
	<div class="row"> 
		<div class="form-group col-md-2">
			<label for="inputObject">Объект</label>
			<select id="inputObject" name="commonInput[object]" class="form-control">
			<option selected>Выберите...</option>
			<option value="Новые концессии">Новые концессии</option>
			<option value="Катока">Катока</option>
			<option value="Луэле">Луэле</option>
			</select>
		</div>
		<div class="form-group col-md-2">
			<label for="inputConcession">Концессия</label>
			<select id="inputConcession" name="commonInput[concession]" class="form-control">
			<option selected>Выберите...</option>
			<option>Гангу</option>
			<option>Луаше</option>
			<option>Луанге</option>
			<option>Чафуа</option>
			</select>
		</div>
		<div class="form-group col-md-2">
			<label for="inputType">Тип скважины</label>
			<select id="inputType" name="commonInput[typeDH]" class="form-control">
			<option selected>Выберите...</option>
			<option>поисковая</option>
			<option>поисково-заверочная</option>
			<option>картировочная</option>
			<option>разведочная вертикальная</option>
			<option>разведочная наклонная</option>
			<option>структурно-картировочная</option>
			<option>геомеханическая</option>
			<option>инженерно-геологическая</option>	
			<option>эксплоразведочная</option>
			<option>гидрогеологическая</option>
			</select>
		</div>
		<div class="form-group col-md-2">
			<label for="inputLineName">№ линии/аномалии</label>
			<input type="text" class="form-control" placeholder="№ линии/аномалии" id="inputLineName" name="lineName">
		</div>
		<div class="form-group col-md-2">
			<label for="inputHoleNumber">№ скважины</label>
			<input type="text" class="form-control" placeholder="№ скважины" id="inputHoleNumber" name="holeNumber">
		</div>
	</div>
	<div class="row">
		<div class="container depth">
			<div class="form-group col-md-2 projectDepth">
				<label for="inputProjectDepth">Глубина прект., м</label>
				<input type="text" class="form-control" placeholder="Глубина, м" name="projectDepth">
			</div>
			<div class="form-group col-md-2 finalDepth">
				<label for="inputFinalDepth">Глубина факт., м</label>
				<input type="text" class="form-control" placeholder="Глубина, м" name="finalDepth">
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-4 coordinateInputForm">
	<label for="coordinateInputForm">КООРДИНАТЫ УСТЬЯ СКВАЖИНЫ:</label>
	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="inputEast">Восточная (Х)</label>
			<input type="text" class="form-control" placeholder="East" id="inputEast" name="east">
		</div>
		<div class="form-group col-md-4">
			<label for="inputNorth">Северная (Y)</label>
			<input type="text" class="form-control" placeholder="North" id="inputNorth" name="north">
		</div>
		<div class="form-group col-md-4">
			<label for="inputRL">Абс. отметка (RL)</label>
			<input type="text" class="form-control" placeholder="RL" id="inputRL" name="rl">
		</div>
	</div>
	</div>
	<div class="col-lg-6 drillDateInputForm">
	<div class="form-row">
		<div class="form-group col-md-3">
			<label for="inputDrillStart">Бурение начато:</label>
			<input type="date" class="form-control" placeholder="Дата" id="inputDrillStart" name="drillStart">
		</div>
		<div class="form-group col-md-3">
			<label for="inputDrillFinish">Бурение окончено:</label>
			<input type="date" class="form-control" placeholder="Дата" id="inputDrillFinish" name="drillFinish">
		</div>
		<div class="form-group col-md-6">
			<label for="inputReasonDrillFinish">Причина окончания бурения</label>
			<select class="form-control" id="inputReasonDrillFinish" name="drillReason">
			<option>выполнение геологического задания</option>
			<option>геологическое осложнение</option>
			<option>технологическое осложнение</option>
		</select>
		</div>
		</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="inputAuthor">Документатор</label>
			<select class="form-control" id="inputAuthor" name="author">
			<option>Бисеров Н.В.</option>
			<option>Бойко А.Н.</option>
			<option>Гураков П.Ф.</option>
			<option>Дьяконов Д.Б.</option>
			<option>Егоров А.Н.</option>
			<option>Емельянов В.С.</option>
			<option>Зайцев А.В.</option>
			<option>Золотоног А.В.</option>
			<option>Коршунов А.В.</option>
			<option>Коротких Д.В.</option>
			<option>Манчур Б.З.</option>
			<option>Никитин А.А.</option>
			<option>Первов В.А.</option>
			<option>Рогалев А.</option>
			<option>Шкляев О.В.</option>
			<option>Antonio Assis</option>
			<option>Arsenio</option>
			<option>Bonifacio Chipoia</option>
			<option>Floriano</option>
			<option>Madi</option>
			<option>Neves Tanda</option>
			<option>Ngoy Nshi</option>
			<option>Sebastio Marimba</option>
			</select>
		</div>
	</div>
	</div>
	</div>
<div class="row">
<div class="constructDH col-md-4">
	<div class="form-group col-md-12">
		<label for="conductor">КОНСТРУКЦИЯ СКВАЖИНЫ:</label>
	</div>
	<div class="container drillingMachine">
		<div class="col-md-5">
			<label for="drillingMachine">Буровой станок</label>
			<select class="form-control" id="drillingMachine" name="drillMachine">
			<option>ЗИФ-650М</option>
			<option>УРБ2-А2</option>
			</select>
		</div>
	</div>
	<div class="form-row conductor">
		<div class="form-group col-md-12">
			<label for="conductor">Обсадная калонна, м</label>
		</div>
		<div class="form-row ConductorFrom1">
		<div class="form-group col-md-3">
			<label for="conductorFrom1">От</label>
			<input type="text" class="form-control" placeholder="От" id="ConductorFrom1" name="condFrom1">
		</div>
		<div class="form-group col-md-3">
			<label for="conductorTo1">До</label>
			<input type="text" class="form-control" placeholder="До" id="ConductorTo1" name="condTo1">
		</div>
		<div class="form-group col-md-3">
			<label for="conductorDiam1">Диаметр, мм</label>
			<select class="form-control" id="conductorDiam1" name="condDiam1">
			<option>273</option>
			<option>219</option>
			<option>190</option>
			</select>
		</div>
		</div>
		<div class="form-row ConductorFrom2">
		<div class="form-group col-md-3">
			<input type="text" class="form-control" placeholder="От" id="ConductorFrom2" name="condFrom2">
		</div>
		<div class="form-group col-md-3">
			<input type="text" class="form-control" placeholder="До" id="ConductorTo2" name="condTo2">
		</div>
		<div class="form-group col-md-3">
			<select class="form-control" id="conductorDiam2" name="condDiam2">
			<option>273</option>
			<option>219</option>
			<option>190</option>
			</select>
		</div>
		</div>
		<div class="form-row ConductorFrom3">
		<div class="form-group col-md-3">
			<input type="text" class="form-control" placeholder="От" id="ConductorFrom3" name="condFrom3">
		</div>
		<div class="form-group col-md-3">
			<input type="text" class="form-control" placeholder="До" id="ConductorTo3" name="condTo3">
		</div>
		<div class="form-group col-md-3">
			<select class="form-control" id="conductorDiam3" name="condDiam3">
			<option>273</option>
			<option>219</option>
			<option>190</option>
			</select>
		</div>
		</div>
	</div>
	<div class="form-row drilling1">
		<div class="form-group col-md-12">
			<label for="drilling1">Бурение, м</label>
		</div>
		<div class="form-group col-md-3">
			<label for="drillingFrom1">От</label>
			<input type="text" class="form-control" placeholder="От" id="drillingFrom1" name="drillFrom1">
		</div>
		<div class="form-group col-md-3">
			<label for="drillingTo1">До</label>
			<input type="text" class="form-control" placeholder="До" id="drillingTo1" name="drillTo1">
		</div>
		<div class="form-group col-md-3">
			<label for="drillingDiam1">Диаметр, мм</label>
			<select class="form-control" id="drillingDiam1" name="drillDiam1">
			<option>172</option>
			<option>151</option>
			<option>132</option>
			<option>112</option>
			</select>
		</div>
	</div>
	<div class="form-row drilling2">
		<div class="form-group col-md-3">
			<input type="text" class="form-control" placeholder="От" id="drillingFrom2" name="drillFrom2">
		</div>
		<div class="form-group col-md-3">
			<input type="text" class="form-control" placeholder="До" id="drillingTo2" name="drillTo2">
		</div>
		<div class="form-group col-md-3">
			<select class="form-control" id="drillingDiam2" name="drillDiam2">
			<option>172</option>
			<option>151</option>
			<option>132</option>
			<option>112</option>
			</select>
		</div>
	</div>
	<div class="form-row drilling3">
		<div class="form-group col-md-3">
			<input type="text" class="form-control" placeholder="От" id="drillingFrom3" name="drillFrom3">
		</div>
		<div class="form-group col-md-3">
			<input type="text" class="form-control" placeholder="До" id="drillingTo3" name="drillTo3">
		</div>
		<div class="form-group col-md-3">
			<select class="form-control" id="drillingDiam3" name="drillDiam3">
			<option>172</option>
			<option>151</option>
			<option>132</option>
			<option>112</option>
			</select>
		</div>
	</div>
	<div class="form-row drilling4">
		<div class="form-group col-md-3">
			<input type="text" class="form-control" placeholder="От" id="drillingFrom4" name="drillFrom4">
		</div>
		<div class="form-group col-md-3">
			<input type="text" class="form-control" placeholder="До" id="drillingTo4" name="drillTo4">
		</div>
		<div class="form-group col-md-3">
			<select class="form-control" id="drillingDiam4" name="drillDiam4">
			<option>172</option>
			<option>151</option>
			<option>132</option>
			<option>112</option>
			</select>
		</div>
	</div>
	<div class="form-row drilling5">
		<div class="form-group col-md-3">
			<input type="text" class="form-control" placeholder="От" id="drillingFrom5" name="drillFrom5">
		</div>
		<div class="form-group col-md-3">
			<input type="text" class="form-control" placeholder="До" id="drillingTo5" name="drillTo5">
		</div>
		<div class="form-group col-md-3">
			<select class="form-control" id="drillingDiam5" name="drillDiam5">
			<option>172</option>
			<option>151</option>
			<option>132</option>
			<option>112</option>
			</select>
		</div>
	</div>
</div>
<div class="container col-md-8">
	<button type="submit" id="submitInput" class="btn btn-warning btn-lg">Отправить</button>
</div>
</div>
</form>';

?>