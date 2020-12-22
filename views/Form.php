<?php
    class Form{

        private $data;

        public function __construct($data = array()){
            $this->data = $data;
        }

        private function getValue($index,$value = null){
            if(isset($value))
            {
                return $value;
                // return $this->data[$index];
            }
            else if(isset($value))
            {
                return $this->data[$index];
            }
            else
            {
                return null;
            }
        }

        private function getSelected($index){
            return $this->data[$index];
        }

        public function input($name,$label,$placeholder = null,$type = 'text',$value = null,$cut = null,$required = null){
            if($required == null){$r = "";}else {$r = "required";}
            return '<div class="form-group '.$cut.'" ><label for="'.$name.'">'.$label.' :</label><input class="form-control" type="'.$type.'" name="'.$name.'" id="'.$name.'" placeholder="'.$placeholder.'" value="'.$this->getValue($name,$value).'" '.$r.' ></div>';
        }


        public function textarea(string $name,string $label, string $placeholder = null,$value = null,$cut = null,int $rows = null,$required = null){
            return '<div class="form-group '.$cut.'">
            <label for="'.$name.'">'.$label.' :</label>
            <textarea name="'.$name.'" id="'.$name.'" rows="'.$rows.'" value="'.$value.'" placeholder="'.$placeholder.'" class="form-control">'.$this->getValue($name,$value).'</textarea>
        </div>';
        }



        public function select_data(string $nom, string $label,$contenu = array(),string $element_selected = null,string $taille = null,$default = false){

            if($default == true){
                $option = '<option value="">Non précisé</option>';
             }else{
                $option = "";
             }
            foreach($contenu as $k => $c){
                $gv = (int) ($this->getValue($nom,$element_selected));
                if($c->id == $element_selected)
                {
                    $s = 'selected="selected"';
                }
                else{
                    $s = "";

                    if($element_selected != null)
                    {
                        if($element_selected == $c->id)
                        {
                            $s = 'selected="selected"';
                        }
                    }
                    else
                    {
                        $s = "";
                    }
                }


                $option .= '<option value="'.$c->id.'" '.$s.' >'.$c->nom.'</option>';
            }

            return '<div class="form-group '.$taille.'">
                <label for="'.$nom.'">'.$label.':</label>
                <select name="'.$nom.'" id="'.$nom.'" class="form-control">
                    '.$option.'
                </select>
            </div>';

        }




        public function select(string $nom, string $label,$contenu = array(),string $element_selected = null,string $taille = null){

            $option = "";
            foreach($contenu as $k => $c){
                if($this->getValue($nom,$element_selected) == $k)
                {
                    $s = 'selected="selected"';
                    $element_selected = null;
                }
                else
                {
                    if($element_selected != null)
                    {
                        if($element_selected <= count($contenu))
                        {
                            if($element_selected == $k)
                            {
                                $s = 'selected="selected"';
                            }
                            else
                            {
                                $s = "";
                            }
                        }
                    }
                    else
                    {
                        $s = "";
                    }
                }

                $option .= '<option value="'.$k.'" '.$s.' >'.$c.'</option>';
            }

            return '<div class="form-group '.$taille.'">
                <label for="'.$nom.'">'.$label.':</label>
                <select name="'.$nom.'" id="'.$nom.'" class="form-control">
                    '.$option.'
                </select>
            </div>';
        }

        public function radio(string $text,string $name,$option_1 = array(),$option_2 = array(),string $taille){
            if($this->getValue($name) == "on")
            {
                $r = 'checked="checked"';
            }
            else
            {
                $r = "";
            }

            foreach($option_1 as $k => $c):$option_1_name = $k;$option_1_value = $c;endforeach;
            foreach($option_2 as $k => $c):$option_2_name = $k;$option_2_value = $c;endforeach;
            return '<div class="form-group '.$taille.'">
            <label>'.$text.':</label>

            <div class="mt-3">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="'.$option_1_name.'" name="'.$name.'" '.$r.' class="custom-control-input" value="'.$option_1_value.'" >
<label class="custom-control-label" for="'.$option_1_name.'">'.$option_1_value.'</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
<input type="radio" id="'.$option_2_name.'" name="'.$name.'" value="'.$option_2_value.'" class="custom-control-input">
<label class="custom-control-label" for="meme_avis_dimpots_non">'.$option_2_value.'</label>
</div>
</div>
        </div>';
        }

        // public function select($nom,$text,$option = array()){
        //     Utils::debug($option);
        //     return '<div class="form-group">
        //     <label for="'.$nom.'">Centre d\'appel :</label>
        //     <select class="form-control" name="'.$nom.'" id="'.$nom.'">
        //         '.foreach($option as $c):
        //         <option value="1" selected>FD Group</option>
            
        //     </select>
        // </div>';
        // }

        public function button($class,$type,$text = "Validate",$nom){
            return '<button type="'.$type.'" class="'.$class.'" id="'.$nom.'">'.$text.'</button>';
        }

        public function submit($class,$text = "Validate"){
            return '<button class="btn btn-'.$class.' btn-block" type="submit">'.$text.'</button>';
        }

    }