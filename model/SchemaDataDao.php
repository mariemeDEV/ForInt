<?php
/**
 * Created by PhpStorm.
 * User: mouha
 * Date: 06/12/2017
 * Time: 09:30
 */

class SchemaDataDao extends DBao
{
    public function setSchemaData()
    {

        $sql = "`INSERT INTO `schema_data` (`id`, `codeformule`, `typecontrat`, `naturecontrat`, `codezone`, `qualite`, `codeville`, `codeprofession`, `codeactivité`, `typepiece`, `numpiece`, `typepermi`, `numepermis`, `datedelivpermis`, `lieudelivpermis`, `codeusage`, `codecarrosserie`, `datevali`, `datesous`, `datesais`, `flagtrans`, `id_police`) VALUES (NULL, '2', '', '', '', '', '', '3', '', '', '', '', '', '', '', '', NULL, '2017-12-06', '2017-12-06', '2017-12-06', '', '5a0b0a6919eee')";

        return $this->executeMAJ($sql);
    }

}