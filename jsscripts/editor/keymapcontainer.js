class KeyMapContainer {
    constructor(_objKey, _objType) {
        let objKey = _objKey;
        this.getObjKey = () => objKey;

        let objType = _objType;
        this.getObjType = () => objType;

        let childObjects = new Array();
        this.addChild = function(key, type) {
            childObjects.push(new KeyMapContainer(key ,type));
        }

        this.deleteChild = function(key) {
            let ndx = childObjects.length;
            while(--ndx && key !== childObjects[ndx].getKey()) continue;
            if(ndx >= 0) childObjects.splice(ndx, 1);
        }
    }
}