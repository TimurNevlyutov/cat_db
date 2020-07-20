<?php

echo '
<div class="firstInformForm">
	<div class="row"> 
		<div class="form-group col-md-2">
			<label for="inputObject">Объект</label>
			<select id="inputObject" class="form-control">
			<option selected>Выберите...</option>
			<option>Новые концессии</option>
			<option>Катока</option>
			<option>Луэле</option>
			</select>
		</div>
		<div class="form-group col-md-2">
			<label for="inputType">Тип скважины</label>
			<select id="inputType" class="form-control">
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
			<input type="text" class="form-control" placeholder="№ линии/аномалии" id="inputLineName">
		</div>
		<div class="form-group col-md-2">
			<label for="inputHoleNumber">№ скважины</label>
			<input type="text" class="form-control" placeholder="№ скважины" id="inputHoleNumber">
		</div>
		<div class="form-group col-md-2">
			<label for="inputProjectDepth">Глубина прект., м</label>
			<input type="text" class="form-control" placeholder="Глубина, м">
		</div>
		<div class="form-group col-md-2">
			<label for="inputFinalDepth">Глубина факт., м</label>
			<input type="text" class="form-control" placeholder="Глубина, м">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-4 coordinateInputForm">
	<label for="coordinateInputForm">КООРДИНАТЫ УСТЬЯ СКВАЖИНЫ:</label>
	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="inputEast">Восточная (Х)</label>
			<input type="text" class="form-control" placeholder="East" id="inputEast">
		</div>
		<div class="form-group col-md-4">
			<label for="inputNorth">Северная (Y)</label>
			<input type="text" class="form-control" placeholder="North" id="inputNorth">
		</div>
		<div class="form-group col-md-4">
			<label for="inputRL">Абс. отметка (RL)</label>
			<input type="text" class="form-control" placeholder="RL" id="inputRL">
		</div>
	</div>
	</div>
	<div class="col-lg-6 drillDateInputForm">
	<div class="form-row">
		<div class="form-group col-md-3">
			<label for="inputDrillStart">Бурение начато:</label>
			<input type="date" class="form-control" placeholder="Дата" id=""inputDrillStart">
		</div>
		<div class="form-group col-md-3">
			<label for="inputDrillFinish">Бурение окончено:</label>
			<input type="date" class="form-control" placeholder="Дата" id="inputDrillFinish">
		</div>
		<div class="form-group col-md-6">
			<label for="inputResonDrillFinish">Причина окончания бурения</label>
			<select class="form-control" id="inputResonDrillFinish">
			<option>выполнение геологического задания</option>
			<option>геологическое осложнение</option>
			<option>технологическое осложнение</option>
		</div>
	</div>
</div>';

?>