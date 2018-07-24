<template>
    <div>
        <el-select v-model="value8" filterable placeholder="英雄1" @change="selectClick1">
            <el-option
                v-for="item in options1"
                :key="item.value"
                :label="item.label"
                :value="item.value">
            </el-option>
        </el-select>
        <el-select v-model="value8" filterable placeholder="英雄2" @change="selectClick1">
            <el-option
                v-for="item in options1"
                :key="item.value"
                :label="item.label"
                :value="item.value">
            </el-option>
        </el-select>
        <el-select v-model="value8" filterable placeholder="英雄3" @change="selectClick1">
            <el-option
                v-for="item in options1"
                :key="item.value"
                :label="item.label"
                :value="item.value">
            </el-option>
        </el-select>
        <el-select v-model="value8" filterable placeholder="英雄4" @change="selectClick1">
            <el-option
                v-for="item in options1"
                :key="item.value"
                :label="item.label"
                :value="item.value">
            </el-option>
        </el-select>
        <el-select v-model="value8" filterable placeholder="英雄5" @change="selectClick1">
            <el-option
                v-for="item in options1"
                :key="item.value"
                :label="item.label"
                :value="item.value">
            </el-option>
        </el-select>
        <el-button type="primary" icon="el-icon-refresh">重置</el-button>
        <el-button type="primary" icon="el-icon-search">搜索</el-button>
    </div>
</template>
<script>
    export default {
        methods: {
            selectClick1() {
                console.log('s122');
            },
            selectClick2() {
                console.log('s122');
            },
        },
        mounted() {
            console.log(this.options1)
        },
        data() {
            return {
                options1: [{
                    value: '选项1',
                    label: '黄金糕'
                }, {
                    value: '选项2',
                    label: '双皮奶'
                }, {
                    value: '选项3',
                    label: '蚵仔煎'
                }, {
                    value: '选项4',
                    label: '龙须面'
                }, {
                    value: '选项5',
                    label: '北京烤鸭'
                }],
                value8: '',
            }
        }
    }
</script>